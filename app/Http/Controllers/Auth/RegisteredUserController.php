<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\MessageGoogle;
use App\Models\Avatar;
use App\Models\Billing;
use App\Models\Newsletter;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;
use Truc;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $avatars = Avatar::all();
        return view('auth.register', compact('avatars'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        // pour le re-size des images ici en l'occurence l'image de avatar
        $image = $request->file('file');
        $input['file'] = time().'.'.$image->getClientOriginalExtension();
        
        $destinationPath = public_path('/thumbnail');
        $imgFile = Truc::make($image->getRealPath());
        $imgFile->resize(150, 150, function ($constraint) {
		    $constraint->aspectRatio();
		})->save($destinationPath.'/'.$input['file']);
        $destinationPath = public_path('/uploads');
        $image->move($destinationPath, $input['file']);        

        // pour donner une billing incomplète aux user
        $billing = new Billing();
        $billing->name = $request->name;
        $billing->email = $request->email;
        $billing->save();
        $bill_id = Billing::latest()->first();#variable intermédiaire car $billing n'est pas encore dans la table et retourne null

        // pour lancer la newsletter, càd mettre l' email dans la table newsletter et activer l'email de réponse " vous êtes bien connecté "
        if ($request->newsletter != null) {
            $newsletter = new Newsletter();
            $newsletter->email = $request->email;
            $newsletter->save();
            $mail = [
                'email' => $request->email,
                'message' => 'vous êtes bien inscrit',
            ];
            Mail::to($request->email)->send(new MessageGoogle($mail));
        }

        // create user de base de breeze
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);


        // pour que l'image upload et resize soit défini comme avatar
        $avatar = new Avatar();
        $avatar->src = $input['file'];
        $avatar->save();
        $avatarbis = $avatar;

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'avatar_id' => $avatarbis->id,
            'billing_id' => $bill_id->id,
        ]);


        

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
