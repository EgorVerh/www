<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    public function authors()
    {
        return $this->belongsToMany('App\Authors')->using('App\BooksAuthors');
    }
    public function polki()
    {
        return $this->belongsTo('App\Polki');
    }
}
