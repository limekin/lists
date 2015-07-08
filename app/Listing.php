<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
  protected $fillable = ['name'];

  public function listing_items() {
    return $this->hasMany('App\ListingItem');
  }
}
