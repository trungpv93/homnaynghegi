<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'user_id', 'title', 'body', 'shortlink', 'click', 'click_short_link', 'view', 'reshared', 'is_privated', 'is_deleted', 'type_id',
  ];

    public function meta()
    {
        return $this->hasMany('App\PostMeta');
    }
  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [

  ];
}
