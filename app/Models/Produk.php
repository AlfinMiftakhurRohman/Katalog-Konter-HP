<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    //

    public function brand() {
        return $this->belongsTo(Brand::class);
    }

    public function pencatatan_penjualan() {
        return $this->hasMany(PencatatanPenjualan::class);
    }
}
