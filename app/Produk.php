<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produk extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
		'code', 'name', 'price'
		// , 'image', 
    ];

    // public function getImageUrlAttribute()
    // {
    //     return Storage::url('upload/project/'.$this->image);
    // }

    protected $dates =['deleted_at'];

    public function order()
    {
        return $this->hasMany('App\Order', 'produk_id');
    }
}
