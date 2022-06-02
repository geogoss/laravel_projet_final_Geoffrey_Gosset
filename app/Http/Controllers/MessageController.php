<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
//Importation des classes pour le mail
use App\Mail\MessageGoogle;
use App\Models\Mailbox;

class MessageController extends Controller
{
    // Le formulaire du message (que je n'ai pas utilisé puisque j'ai repris celui de la template)
	public function formMessageGoogle () {
		return view("forms.message-google");
	}

    // Envoi du mail aux utilisateurs
	public function sendMessageGoogle (Request $request) {

		#1. Validation de la requête
		$this->validate($request, [ 'message' => 'bail|required' ]);

		#2. Récupération des utilisateurs
		// $users = User::all();
        $mail = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];
        $message = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => 'Nous avons bien reçu le message',

        ];

		$mailbox = new Mailbox();
        $mailbox->name = $request->name;
        $mailbox->email = $request->email;
        $mailbox->content = $request->message;
        $mailbox->save();

		#3. Envoi du mail
		Mail::to("geoffreygosset123@gmail.com")->send(new MessageGoogle($mail));
		Mail::to($request->email)->send(new MessageGoogle($message));

		return back()->withText("Message envoyé");
	}
}
