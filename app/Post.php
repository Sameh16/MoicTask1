<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table  = 'posts';

    //primaryKey
    public $primaryKey = 'id';

    public $timestamps  = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    
}
