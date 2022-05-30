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
use Illuminate\Validation\Rules;

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

        $billing = new Billing();
        $billing->name = $request->name;
        $billing->email = $request->email;
        $billing->save();
        $bill_id = Billing::latest()->first();

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


        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'avatar_id' => $request->avatar_id,
            'billing_id' => $bill_id->id,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
