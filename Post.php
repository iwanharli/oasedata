<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Models\Post as VoyagerPost;


class Post extends VoyagerPost
{
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
