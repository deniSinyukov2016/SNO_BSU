<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use Searchable;

    protected  $fillable = [
        'title', 'content', 'status', 'alias',"thumbnail"
    ];

    public function terms(){
        return $this->belongsToMany(Term::class, 'post_term');
    }
}
