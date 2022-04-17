<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuctionProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "description",
        "image",
        "end_date",
        "tag",
        "rrp",
        "min_bid"
     
    ];
    public function bids(){
        return $this->hasMany(Bid::class);
    }
    public function wins(){
        return $this->hasOne(Win::class);
    }

}
