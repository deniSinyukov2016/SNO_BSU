<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected  $fillable = [
        'title', 'content', 'status', 'alias', 'url'
    ];

    public function terms(){
        return $this->belongsToMany(Term::class, 'post_term');
    }
}
