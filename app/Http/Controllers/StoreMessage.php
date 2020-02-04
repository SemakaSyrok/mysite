<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class StoreMessage extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $validator =  Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'email|required',
            'message' => 'max:30000|required',
            'captcha' => 'required|captcha'
        ]);

        if ($validator->fails()) {
            return redirect('contact')
                ->withErrors($validator)
                ->withInput();
        }

        $message = new \App\Message();
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        $message->ip = $request->ip();
        $message->save();

        Mail::send('mail.message',[], function ($message)  {
            $message->to('semakasyrok1@gmail.com', 'To Simon')->subject('New message');
            $message->from('info@simon-svirkov.com', 'From Simon Svirkov');
        });

        return redirect('contact')->with('submited', true);
    }
}
