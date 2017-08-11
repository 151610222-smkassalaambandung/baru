<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jakett extends Model
{
	protected $fillable =['foto','harga','bahanjakets_id'];
    public function bahanjakets(){
    	return $this->belongsTo('App\bahanjaket','bahanjakets_id');
    }
}
