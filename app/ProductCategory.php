<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = 'product_category';
    public $timestamps = false;

    public function products()
    {
        return $this->belongsToMany('Product');
    }
}
