<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_product extends Model
{
    use HasFactory;
    protected $table = "tb_produk";
    protected $fillable = [
        'nama_produk', 'desk_produk', 'foto_produk', 'stock_produk', 'harga_produk', 'status', 'created_at'
    ];
}
