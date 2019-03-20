<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function getAllBrands(){
        return $this->all();
    }

    public function getSingleBrand($id){
        return $this->where('id', $id)->first();
    }
    public function user(){
        return $this->belongsTo('App\User','added_by','id');
    }
}
