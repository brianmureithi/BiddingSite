<?php

namespace App\Http\Controllers;

use App\Models\FAQModel;
use Illuminate\Http\Request;

class FAQModelController extends Controller
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
        //
        return view('backend.pages.addFAQ');
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
     * @param  \App\Models\FAQModel  $fAQModel
     * @return \Illuminate\Http\Response
     */
    public function show(FAQModel $fAQModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FAQModel  $fAQModel
     * @return \Illuminate\Http\Response
     */
    public function edit(FAQModel $fAQModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FAQModel  $fAQModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FAQModel $fAQModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FAQModel  $fAQModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(FAQModel $fAQModel)
    {
        //
    }
}
