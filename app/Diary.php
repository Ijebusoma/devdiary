<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
  protected $fillable = [
    'error', 'fix',
  ];
    //
    public function user()
    {
      return $this->BelongsTo('App\User');
    }
}
