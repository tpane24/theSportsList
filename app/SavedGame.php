<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SavedGame extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'game_id', 'participant_id',
  ];
}
