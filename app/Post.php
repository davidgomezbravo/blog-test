<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Conner\Tagging\Taggable;

class Post extends Model
{
    use Taggable;
    
    protected $fillable = [
        'user_id',
        'title',
        'content',
        'tag_id'
      ];

      public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
