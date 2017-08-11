<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bahanjaket extends Model
{
	protected $fillable =['bahan_jaket'];
	
    public function jaketts(){
    	return $this->hasMany('App\jakett','bahanjakets_id');
    }
}
