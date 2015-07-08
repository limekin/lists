<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListingItem extends Model
{
  protected $fillable = ['name', 'listing_id'];

  public function listing() {
    return $this->belongsTo('App\Listing');
  }

}
