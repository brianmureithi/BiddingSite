@extends('backend.layouts.layout')

@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
          <li class="breadcrumb-item">Pages</li>
          @if($Product)
        
          <li class="breadcrumb-item active">View Product <span style="color:rgb(190, 127, 8)">({{$Product->name}})</span></li>

       

        </ol>
      </nav>
    </div><!-- End Page Title -->


  
    <section class="section">
        <div class="row">
          <div class="col-lg-6">
  
            <div class="card">
              <div class="card-body view-image-card">
                <h5 class="card-title">Product Image</h5>
               <div>
                  
                <img src="{{URL:: asset('/storage/img/productImages/'.$Product->image) }}" class="img-fluid" style="min-height:30vh;max-height:30vh; margin-top:15px; margin-bottom:5px;"alt="{{ $Product->name }}">
               </div>

               <a href="" class="btn btn-primary btn-sm btn-edit">Change</a>
              </div>
            </div>
  
          </div>
       
  
          <div class="col-lg-4">
  
            <div class="card">
              <div class="card-body view-item-card" >
                <h5 class="card-title">Details</h5>
                <div class="product-desc">
                    <h5>Name</h5> 
                     <p>{{$Product->name}}</p>

                </div>
               
                <div class="product-desc">
                    <h5>Unique tag</h5> 
                     <p>{{$Product->tag}}</p>

                </div>
                <div class="product-desc">
                    <h5>Recommended retail price</h5> 
                     <p>{{$Product->rrp}}</p>

                </div>
                <div class="product-desc">
                    <h5>Minimum bid amount</h5> 
                     <p>{{$Product->min_bid}}</p>

                </div>
                <div class="product-desc">
                    <h5>Deadline</h5> 
                         <p>{{$Product->end_date}}</p>
    
                    </div>
                <div class="product-desc">
                    <h5>Description</h5> 
                     <p>{!!$Product->description!!}</p>

                </div>

                <a href="" class="btn btn-primary btn-sm btn-edit">Update</a>
                
               
              </div>
            </div>
  
          </div>
        </div>
      </section>
  



          
      @endif




    
  </main><!-- End #main -->

  
  @endsection

