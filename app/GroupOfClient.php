<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class GroupOfClient extends Model
{
//    use Translatable;
//    protected $translatable = ['Description'];

    public function clients()
    {
        return $this->HasMany(\App\PotentialClient::class, 'group_of_clients_id');
    }
}
