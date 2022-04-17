<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        "phone_number",
        "transaction_id",
        "amount",
        "bidder_name",
        "account_name",
            
    ];

    public function auctionProduct(){
        return $this->belongsTo(AuctionProduct::class);
    }
}
