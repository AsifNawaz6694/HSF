<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function getAllProducts(){
        return $this->all();
    }
    public function getSingleProduct($id){
        return $this->where('id', $id)->first();
    }
    public function user(){
        return $this->belongsTo('App\User','added_by','id');
    }
    public function category(){
        return $this->belongsTo('App\Category','category_id','id');
    }
    public function brand(){
        return $this->belongsTo('App\Brand','brand_id','id');
    }
    public function supplier(){
        return $this->belongsTo('App\Supplier','supplier_id','id');
    }
}
