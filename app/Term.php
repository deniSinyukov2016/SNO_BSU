<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{

    protected $fillable = [
        'name', 'alias', 'sort', 'url'
    ];

    public function posts(){
        return $this->belongsToMany(Post::class, 'post_term');
    }
}
