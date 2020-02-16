<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use App\Observers\CasesObserver;

class Message extends Model
{


    protected $fillable = [
        'name', 'email', 'message', 'ip'
    ];
}
