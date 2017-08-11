<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    //
    protected $fillable =['nama_kategori'];
    public function blogs()
    {
    	return $this->hasMany('App\Blog','kategori_id');
    }
}
