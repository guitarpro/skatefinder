<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    protected $fillable = ['name', 'address', 'description', 'image_path'];
    
    public function users(){
		return $this->belongsTo('App\User');
	}
    
}
