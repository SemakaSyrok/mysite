<?php

namespace App\Http\Controllers;

use App\Frontend\Helper;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function pay()
    {
        return view('pay');
    }

    public function faq()
    {
        return view('faq');
    }

    public function contact(Request $request)
    {
        $request->session()->flash('contact_message', Helper::getMessage($request->mess));

        return view('contact');
    }

    public function skills()
    {
        return view('skills');
    }

    public function projects()
    {
        return view('projects');
    }

    public function vms()
    {
        return view('vms');
    }


}
