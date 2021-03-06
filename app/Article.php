<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    protected $fillable=['title', 'body', 'author', 'tag_id', 'category_id'];


}
