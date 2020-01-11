<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */

  protected $fillable = [
    'category_id', 'title', 'description', 'pending'
  ];

  /**
   * Get the category that owns the task.
   */
  public function category()
  {
    return $this->belongsTo(Category::class);
  }
}
