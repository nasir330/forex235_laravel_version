<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    //table relation with post
    public function pagePost() {
        return $this->hasOne(Post::class, 'page_id', 'id');
    }
}
