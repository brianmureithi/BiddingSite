<?php

namespace App\Http\Controllers;

use App\Models\AuctionProduct;
use Illuminate\Http\Request;

class AuctionProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend.pages.addAuctionProduct');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AuctionProduct  $auctionProduct
     * @return \Illuminate\Http\Response
     */
    public function show(AuctionProduct $auctionProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AuctionProduct  $auctionProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(AuctionProduct $auctionProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AuctionProduct  $auctionProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AuctionProduct $auctionProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AuctionProduct  $auctionProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuctionProduct $auctionProduct)
    {
        //
    }
}
