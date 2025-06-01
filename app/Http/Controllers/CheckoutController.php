<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Checkout;

class CheckoutController extends Controller
{
    public function show()
    {
        $cart = session('cart', []);
        if (empty($cart)) {
            return redirect('/cart')->with('error', 'Vaša korpa je prazna.');
        }

        return view('pages.checkout.form'); // resources/views/pages/checkout/form.blade.php
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'company' => 'required|string|max:255',
            'project_name' => 'required|string|max:255',
            'project_start' => 'required|date|after_or_equal:today',
            'project_end' => 'required|date|after_or_equal:project_start',
            'note' => 'nullable|string|max:555',
            'message' => 'nullable|string',
        ]);

        // Podaci o korpi
        $cart = session('cart', []);
        $items = \App\Models\Item::findMany(array_keys($cart));
        $itemsWithQuantities = $items->map(function ($item) use ($cart) {
            $item->quantity = $cart[$item->id];
            return $item;
        });

        // Slanje mejla korisniku
        Mail::to($validated['email'])->send(new Checkout($validated, $itemsWithQuantities, false));
        // Slanje mejla adminu
        Mail::to('stefan.pusica@beostud.rs')->send(new Checkout($validated, $itemsWithQuantities, true));

        // Čistiš korpu
        session()->forget('cart');

        return redirect('/')->with('success', 'Uspešno ste poslali zahtev. Javićemo vam se uskoro!');
    }
}
