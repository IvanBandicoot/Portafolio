<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\MessageReceived;

class MessagesController extends Controller
{
    public function store(){

    	$message = request()->validate([

    		'name' => 'required',
    		'email' => 'required|email',
    		'subject' => 'required',
    		'content' => 'required|min:5'

    	],[

    		'name.required' => __('I need your name'),
    		'email.required|email' => 'Se require una direccion de correo valida',
    		'subject.required' => 'Es necesario que agregue un asunto',
    		'content.required' => 'Por favor indique el contenido de su mensaje', 

    	]);

    	Mail::to('ivanalejandro1996@gmail.com')->queue(new MessageReceived($message));

    	return back()->with('status', 'Recibimos tu mensaje, te responderemos en menos de 24 horas');

    }
}
