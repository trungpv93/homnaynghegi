<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostUserLog extends Model
{
    /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'post_id', 'user_id', 'ip_address', 'user_agent',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [

  ];
}
