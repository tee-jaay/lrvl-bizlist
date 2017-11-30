<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Listings;

class Listing extends Model
{
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
