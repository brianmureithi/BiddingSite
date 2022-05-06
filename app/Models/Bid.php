<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;
    protected $fillable = [
        "amount",
        "phone_number",
        "product_id",
            
    ];

    public function auctionProduct(){
        return $this->belongsTo(AuctionProduct::class, 'product_id', 'id');

    }
}
