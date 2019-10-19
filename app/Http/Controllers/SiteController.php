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

    public function contact(Request $request)
    {
        $request->session()->flash('contact_message', Helper::getMessage($request->input('mess')));

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


}
