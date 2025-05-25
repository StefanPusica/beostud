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
            'message' => 'nullable|string',
        ]);

        // Podaći o korpi
        $cart = session('cart', []);
        $items = \App\Models\Item::findMany(array_keys($cart));
        $itemsWithQuantities = $items->map(function ($item) use ($cart) {
            $item->quantity = $cart[$item->id];
            return $item;
        });

        // Slanje mejlova
        // Korisniku
        Mail::to($validated['email'])->send(new Checkout($validated, $itemsWithQuantities, false));

        // Adminu
        Mail::to('pusicastefan1@gmail.com')->send(new Checkout($validated, $itemsWithQuantities, true));

        // Čistiš korpu
        session()->forget('cart');

        // return redirect('/')->with('success', 'Uspešno ste poslali zahtev. Javićemo vam se uskoro!');
    }
}
