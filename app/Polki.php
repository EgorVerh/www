<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Polki extends Model
{
    public function shkaf()
    {
        return $this->belongsTo('App\shkaf');
    }
    public function books()
    {
        return $this->belongsToMany('App\Books');
    }
}
