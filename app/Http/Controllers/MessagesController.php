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
    
    Mail::to('ezequielszurita@gmail.com')->send(new MessageReceived($message));
   //Mail::to('contacto@mutualcongreso.com.ar')->send(new MessageReceived($message));
    }
}
