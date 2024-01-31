<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductHistory extends Model
{
    use HasFactory;

    protected $table = 'product_histories';

    protected $fillable = ['kode', 'nama', 'harga'];
    // protected $fillable = ['kode', 'nama', 'total_harga', 'total_barang', 'status'];
}
