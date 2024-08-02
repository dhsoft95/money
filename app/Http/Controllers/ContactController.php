<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{

    public function showForm(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        return view('pages.contact');
    }

    public function submit(Request $request): \Illuminate\Http\JsonResponse
    {
        Log::info('Form submitted', $request->all());

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'organization' => 'nullable|string|max:255',
            'body' => 'required|string',
        ]);
        Log::info('Data validated');

        try {
            Mail::to('david.haule@simbamoney.com')->send(new ContactFormMail($validatedData));
            Log::info('Email sent');
            return response()->json(['message' => 'Thanks for your message! We\'ll be in touch.'], 200);
        } catch (\Exception $e) {
            Log::error('Error sending email: ' . $e->getMessage());
            return response()->json(['message' => 'An error occurred. Please try again later.'], 500);
        }
    }
}
