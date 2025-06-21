<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function show()
    {
        return view('pages.contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:1000',
        ]);

        try {
            Mail::to('info@beostud.rs')->send(new Contact($validated));

            return redirect()->back()->with('success', 'Poruka je uspešno poslata. Hvala vam na javljanju!');
        } catch (\Exception $e) {
            Log::error('Greška prilikom slanja kontakt mejla: ' . $e->getMessage());

            return redirect()->back()->with('error', 'Došlo je do greške prilikom slanja poruke. Pokušajte ponovo.');
        }
    }
}
