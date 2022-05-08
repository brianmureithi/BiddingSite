<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.addImages');
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
        try{
            $request->validate
        ([
           
            'image'=>'required',
            
        ]);
        $image =$request->image;
        $filename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('storage/img/Gallery',$filename);
        Gallery::create([
         
          'image'=>$filename,
         
         
          
      ]);
      return back()->with('success','Image added to gallery successfully');
    
    }

      catch(Exception $e){
        return back()->with('fail','Image addition failed');

      }
 
 
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $images= Gallery::all();
        return view('backend.pages.viewImages', compact('images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function delete(Gallery $gallery, $id)
    {
        $findimage = Gallery::find($id);
        $findimage->delete();
        

       
        return back()->with('success','Image Deleted successfuly');
        //
    }
}
