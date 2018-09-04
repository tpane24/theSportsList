<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Advertisement extends Model
{
  use SoftDeletes;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'created_by', 'event_name', 'sport', 'type', 'start_date', 'end_date', 'start_time', 'start_tod', 'end_time', 'end_tod', 'age', 'gender', 'link', 'description', 'address', 'city', 'state', 'zip', 'premiumAdd',
  ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
