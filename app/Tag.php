<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
    /* protected $fillable=['title', 'body', 'author', 'tag_id', 'category_id']; */

}
