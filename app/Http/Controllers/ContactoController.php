<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactoRequest;
use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Mail;


class ContactoController extends Controller
{
    public function contacto()
    {
        return view('productos.contacto');
    }

    public function sendMail(StoreContactoRequest $request)
    {
        $msg = $request;
        Mail::to('aatehortua929@gmail.com')->send(new MessageReceived($msg));

        return redirect()->back()->with('statusAzul', 'Mensaje Enviado Correctamente');
    }
}
