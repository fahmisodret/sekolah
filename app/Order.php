<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
		'code', 'produk_id', 'qty', 'total', 'name', 'phone', 'address'
    ];

    protected $dates =['deleted_at'];

    public function produk()
    {
        return $this->belongsTo('App\Produk', 'produk_id');
    }
}
