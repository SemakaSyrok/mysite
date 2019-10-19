<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientGroup;

class ClientGroupsController extends Controller
{
    private $pathToViews = 'vendor.voyager.client-groups.';

    public function view($id)
    {
        return view($this->pathToViews.'read');
    }


    public function sendEmails()
    {
        echo 'send!!!';
    }
}
