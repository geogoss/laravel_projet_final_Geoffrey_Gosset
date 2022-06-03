<?php

namespace App\Http\Controllers;

use App\Models\Mailbox;
use App\Http\Requests\StoreMailboxRequest;
use App\Http\Requests\UpdateMailboxRequest;
use App\Mail\MessageGoogle;
use App\Models\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMailboxRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMailboxRequest $request)
    {
        $mailbox = new Mailbox();
        $mailbox->author = $request->author;
        $mailbox->subject = $request->subject;
        $mailbox->content = $request->content;
        $mailbox->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mailbox  $mailbox
     * @return \Illuminate\Http\Response
     */
    public function show(Mailbox $mailbox)
    {
        $infos = Info::all();
        $mailbox->bool = true;
        $mailbox->save();
        return view('pages.backoffice.mailBox.backShowMailBox', compact('mailbox', 'infos'));
    }

    public function showMessage(Mailbox $mailbox)
    {
        $infos = Info::all();
        return view('pages.backoffice.mailBox.backShowReponse', compact('mailbox', 'infos'));
    }

    public function message(Request $request)
    {
        
        // $mailbox = Mailbox::where('id', $request->id)->first();
       
        $reponse = [
            'email' => 'geoffreygosset123@gmail.com',
            'message' => $request->message,
        ];

        Mail::to($request->email)->send(new MessageGoogle($reponse));

        return redirect()->back();
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mailbox  $mailbox
     * @return \Illuminate\Http\Response
     */
    public function edit(Mailbox $mailbox)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMailboxRequest  $request
     * @param  \App\Models\Mailbox  $mailbox
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMailboxRequest $request, Mailbox $mailbox)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mailbox  $mailbox
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mailbox $mailbox)
    {
        $mailbox->delete();
        return redirect('/backMailBox');
    }
}
