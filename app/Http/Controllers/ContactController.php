<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactFormMail;
use App\Mail\NewsletterMail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validação dos dados
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Por favor, verifique os campos e tente novamente.',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // 2. Enviar o e-mail
            // Envia para o endereço configurado no .env (MAIL_FROM_ADDRESS) ou defina um fixo aqui
            $recipient = env('MAIL_FROM_ADDRESS');

            Mail::to($recipient)->send(new ContactFormMail($request->all()));

            return view('contact_success');
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao enviar mensagem. Tente novamente mais tarde.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function newsletter(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            $recipient = env('MAIL_FROM_ADDRESS');
            Mail::to($recipient)->send(new NewsletterMail($request->email));

            return view('contact_success', [
                'title' => 'Inscrição Realizada!',
                'message' => 'Obrigado por se inscrever na nossa newsletter. Você receberá novidades sobre segurança em breve.'
            ]);
        } catch (\Exception $e) {
            return back()->with('error', 'Erro ao inscrever. Tente novamente.');
        }
    }
}
