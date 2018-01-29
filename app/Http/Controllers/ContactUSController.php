<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;
use Mail;

class ContactUSController extends Controller
{

  public function contactUS() {
    return view('pages.contato');
  }

  public function contactUSPost(Request $request) {
    $this->validate( $request, [
      'name' => 'required',
      'email' => 'required|email',
      'message' => 'required'
    ]);

    ContactUS::create($request->all());

    Mail::send('email',
      array(
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'user_message' => $request->get('message')
      ), function($message) {
        $message->from('bookverse@contato.com');
        $message->to('bookverse.teste@gmail.com', 'Admin')->subject('Contato');
      });

    return back()->with('success', 'Obrigado por nos enviar uma mensagem!');
  }

}
