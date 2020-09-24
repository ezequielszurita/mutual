<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MessagesController extends Controller
{

    public function index(){
        return view('index');
    }

    public function store(Request $request)
    {
        
     $message = $request;
    // puedo agregar validaciones
    
    Mail::to('lgonzalez@mutualcongreso.com.ar')->send(new MessageReceived($message));
    
    \Flash::success("Email enviado Correctamente.");

    return redirect()->route('home');
    }
}
