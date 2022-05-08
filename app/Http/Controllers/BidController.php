<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use Illuminate\Http\Request;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $showbids= Bid::with('auctionProduct')->paginate(15);
      

        return view('backend.pages.viewBids', compact('showbids'));
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        try{
            $request->validate
            ([
                'bid_amount'=>'required',
            
                'phone' => 'required|regex:/(07)[0-9]{8}/'
           
               
               
            ]);
        
 
     $bid= new Bid;
     $bid->amount = $request-> bid_amount;
     $bid->phone_number = $request->phone;
     $bid->product_id = $request->product_id;
 
     $save=$bid->save();
 
     if($save){
      return response(['status' => 200 ]);
        
     }
     else{
        return response(['status' => 500 ]);
        
        
     }
 }
 catch(Throwable $th){
     return back()->with('fail-bid-terrible','Something wrong happened, please try again ');
 }
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
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function show(Bid $bid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function edit(Bid $bid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bid $bid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bid $bid)
    {
        //
    }
}
