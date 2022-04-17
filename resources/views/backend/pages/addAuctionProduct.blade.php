@extends('backend.layouts.layout')

@section('content')
  <main id="main" class="main">
    <section class="section">
        <div class="row">
      
    <div class="pagetitle">
        <h1>Add Auction Product</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
            <li class="breadcrumb-item">Pages</li>
            <li class="breadcrumb-item active">Add Product</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
      <div class="col-lg-10">
      <div class="card">
        @if($errors->any())
        <div class="alert alert-danger">
            <p><strong>Opps Something went wrong</strong></p>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </div>
            @endif
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
                    <p>{{ $message }}</p>
        </div>
        @elseif($message = Session::get('fail'))
            <div class="alert alert-danger">
                <p>{{ $message }}</p>
          </div>              
        @endif 
        <div class="card-body">
          <h5 class="card-title">New Auction Product</h5>
         

          <!-- Vertical Form -->
      
          <form class="row g-3" method="POST" action="{{route('store.product')}}" enctype="multipart/form-data">
              @csrf
            <div class="col-12">
              <label for="inputNanme4" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" id="inputNanme4" placeholder="Enter product name E.g LG TV">
            </div>
            <div class="col-12">
              <label for="inputEmail4" class="form-label">Image</label>
              <input type="file" name="image" class="form-control" placeholder="Enter item's image" id="inputEmail4">
            </div>
            <div class="col-12">
              <label for="inputPassword4" class="form-label">Deadline </label>
              <input type="datetime-local" name="end_date" class="form-control" placeholder="end date" id="inputPassword4">
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Unique tag</label>
              <input type="text" name="tag" class="form-control" id="inputAddress" placeholder="Enter unique identifier for the item. E.g MV">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Recommended retail price</label>
                <input type="text" name="rrp"  class="form-control" id="inputAddress" placeholder="Enter recommended retail price E.g 20,000">
              </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Minimum Bid</label>
              <input type="text" name="min_bid"  class="form-control" id="inputAddress" placeholder="Enter amount you want to restrict for this bid. Should be a minimum of 20 e.g 20">
            </div>

            <div class="col-12">
              

                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Product Description</h5>
          
                        <!-- TinyMCE Editor -->
                        <textarea name="description" class="tinymce-editor">
                         
                        </textarea><!-- End TinyMCE Editor -->
          
                      </div>
                    </div>
          
                
              </div>
             


            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form><!-- Vertical Form -->

        </div>
      </div>
    </div>

    </div>
    </section>

</main><!-- End #main -->

  
@endsection