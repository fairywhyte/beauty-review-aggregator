<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    const SEPHORA_ID = 1;
    const INFLUENSTER_ID =2;

    protected $table = 'shops';
    public $timestamps = false;
    public function products()
    {
        return $this->belongsToMany('Product');
    }
}
