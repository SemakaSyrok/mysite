<?php

namespace App\Http\Controllers;


use App\Notifications\MessageIncome;
use App\Notifications\NewBadIp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class StoreMessage extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request)
    {
        $validator =  Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'email|required',
            'message' => 'max:30000|required',
            'captcha' => 'required|captcha',
        ]);

        if ($validator->fails() || ($request->phone !== null)) {
            $ip = \App\BadIp::firstOrCreate(['ip' => $request->ip() ]);

            $user = \App\User::where('email', 'semakasyrok1@gmail.com')->first();
            $user->notify(new NewBadIp($request->ip()));

            return redirect('contact')->withErrors($validator)->withInput();
        }

        \App\Message::create($validator->validated()+['ip' => $request->ip()]);

        return redirect('contact')->with('submited', true);
    }
}
