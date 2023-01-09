<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shkaf extends Model
{
    protected $table = 'shkaf';
    public function polki()
    {
        return $this->hasMany('App\Polki');
    }
}
