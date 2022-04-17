<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Win extends Model
{
    use HasFactory;

    protected $fillable = [
        "amount",
        "phone_number",
        "product_id",
        "winner_name"
            
    ];

    public function auctionProduct(){
        return $this->belongsTo(AuctionProduct::class);
    }
}
