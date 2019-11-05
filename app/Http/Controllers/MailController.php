<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GroupOfClient;

class MailController extends Controller
{
    public function sendGroups($id)
    {
        $group = \App\GroupOfClient::findOrFail($id);
        $clients = $group->clients;

        foreach ($clients as $client)
        {
            \App\Jobs\SendMessage::dispatch($client->email, $client->namee, $group->view);
        }

        return redirect()->route('voyager.group-of-clients.index');
    }

}
