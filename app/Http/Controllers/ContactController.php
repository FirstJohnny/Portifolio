<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Envia o e-mail para o administrador
        Mail::to('joaonicolauremostomas@gmail.com')->send(new ContactMail($data));

        return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
    }
}
