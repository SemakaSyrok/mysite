<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupOfClient extends Model
{
    public function clients()
    {
        return $this->HasMany(\App\PotentialClient::class, 'group_of_clients_id');
    }
}
