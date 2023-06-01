<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_pembayaran extends Model
{
    use HasFactory;
    protected $table = "tb_pembayaran";

    public function order()
    {
        return $this->belongsTo(order::class);
    }
}
