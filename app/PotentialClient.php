<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class PotentialClient extends Model
{
    use Translatable;
    protected $translatable = ['description'];
}
