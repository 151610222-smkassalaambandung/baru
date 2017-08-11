<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable =['judul','foto','isi','kategori_id'];
    public function kategoris(){
    	return $this->belongsTo('App\Kategori','kategori_id');
    }
}
