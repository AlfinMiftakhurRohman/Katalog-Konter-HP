<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PencatatanPenjualan extends Model
{
    //

    public function produk() {
        return $this->belongsTo(Produk::class);
    }
}
