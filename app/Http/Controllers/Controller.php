<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\AuctionProduct;
use App\Models\FAQModel;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
       $auctionProducts= AuctionProduct::paginate(9);
       $faqs= FAQModel::all();

        return view('frontend.pages.home', compact('auctionProducts','faqs'));
    }
}
