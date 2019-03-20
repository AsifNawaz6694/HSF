<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public function getAllSuppliers(){
        return $this->all();
    }
    public function getSingleSupplier($id){
        return $this->where('id', $id)->first();
    }
    public function user(){
        return $this->belongsTo('App\User','added_by','id');
    }
}
