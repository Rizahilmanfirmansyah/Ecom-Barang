<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_order extends Model
{
    use HasFactory;
    protected $table = "tb_order";
    protected $fillable = [
        'id_seller', 'id_user', 'nama', 'kelas', 'subtotal', 'discount', 'tax', 'total', 'status', 'note'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function pembayaran()
    {
        return $this->hasOne(pembayaran::class);
    }

}
