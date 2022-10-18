<?php

namespace App\Http\Controllers;

use App\Jobs\SendDiscordMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // validate the request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $message = "Contact form submitted by
{$request->name} ({$request->email})
with message:
{$request->message}";

        $this->dispatch(new SendDiscordMessage($message));

    }
}
