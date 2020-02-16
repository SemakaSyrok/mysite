<?php

namespace App\Http\Controllers;

use App\Notifications\NewBadIp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function readNotifications()
    {
        if(!Auth::user()->unreadNotifications)
            return back();

        foreach (Auth::user()->unreadNotifications as $notification)
        {
            $notification->markAsRead();
        }

        return back();
    }

    public function MakeNotification()
    {
        Auth::user()->notify(new NewBadIp(rand(0,10000) ));

        return back();
    }

}
