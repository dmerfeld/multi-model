<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
  public function user(){
    return $this->belongsTo(User::class);
  }

  public function user(){
    return $this->belongsTo(User::class);
  }

}
