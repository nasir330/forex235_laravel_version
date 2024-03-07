<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

      //table relation with page
      public function pageTitle() {
        return $this->hasMany(Page::class, 'id', 'page_id');
    }
}
