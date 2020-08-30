<?php

namespace App\Http\Controllers;

use App\Mail\MessageRecived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller {

    public function store() {

       $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required',
        ]);

        Mail::to('lea.arturi@gmail.com')->queue(new MessageRecived($message));

        return back()->with('status', 'Recibimos tu mensaje, te responderemos pronto.');

    }

}
