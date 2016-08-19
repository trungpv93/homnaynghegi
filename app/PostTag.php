<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'post_id', 'user_id', 'tag',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [

  ];
}
