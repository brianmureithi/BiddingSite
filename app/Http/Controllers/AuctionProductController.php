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
      
try{
        $request->validate
        ([
            'name'=>'required',
            'description'=>'required',
            'image'=>'required',
            'end_date'=>'required',
            'tag'=>'required',
            'min_bid'=>'required',
            'rrp'=>'required',
        ]);
        $image =$request->image;
        $filename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('storage/img/productImages',$filename);
        AuctionProduct::create([
          'name'=>$request->name,
          'description'=>$request->description,
          'end_date'=>$request->end_date,
          'tag'=>$request->tag,
          'min_bid'=>$request->min_bid,
          'rrp'=>$request->rrp,
          'image'=>$filename,
         
         
          
      ]);
      return back()->with('success','Auction Product added successfully');
    
    }

      catch(Exception $e){
        return back()->with('fail','Auction Product added failed');

      }
        
        //
    }

    public function showproducts(){

        $products= AuctionProduct::paginate('10');
        return view('backend.pages.showAuctionProducts', compact('products'));

    }

   
  

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AuctionProduct  $auctionProduct
     * @return \Illuminate\Http\Response
     */
    public function show(AuctionProduct $auctionProduct, $id)
    {
        //
        $Product= AuctionProduct::find($id);
        return view('backend.pages.ViewProduct', compact('Product'));
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
