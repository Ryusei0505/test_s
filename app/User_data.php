<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_data extends Model
{
    public function posts()
  {
    return $this->hasMany('App\User_post');
  }
}
