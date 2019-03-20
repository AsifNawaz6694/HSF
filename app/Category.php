<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function getAllCategories(){
        return $this->all();
    }

    public function getSingleCategory($id){
        return $this->where('id', $id)->first();
    }
    public function user(){
        return $this->belongsTo('App\User','added_by','id');
    }
}
