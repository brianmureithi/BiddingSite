@extends('backend.layouts.layout')

@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>View Auction Products</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Auction Products</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Current Products</h5>
         

          <!-- Table with hoverable rows -->
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Recommended retail price</th>
                <th scope="col">Deadline</th>
                <th scope="col">Bid amount</th>
                <th scope="col">Created at</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    
                
              <tr>
              
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->rrp}}</td>
                <td>{{$product->end_date}}</td>
                <td>{{$product->min_bid}}</td>
                <td>{{$product->created_at->diffForHumans()}}</td>
                <td>
                    <a href="{{route('viewproduct', $product->id)}}"  class="btn btn-success btn-sm ">View</a>
                {{--  <a href="#" data-toggle="modal" data-target="#edit-post-{{$post->id}}" class="btn btn-success btn-sm p-5">edit</a> --}}
                    <a href="#" class="btn btn-danger btn-sm" onclick="  confirm('You are about to delete {{$product->name }} ?') ? document.getElementById('delete-product-{{$product->id}}').submit() : ''  ">delete</a>
                    <form action="{{-- {{route('destroy-post-route',$post->id)}} --}}" method="post" id="delete-product-{{$product->id}}">
                        @csrf
                        @method('DELETE')
                    </form>
                  {{--   @include('admin.dashboard.editPostPopup') --}}
                </td>
              </tr>
              @empty
              <div class="alert alert-danger">
                  No products available at the moment
              </div>
                    
                @endforelse
             
            </tbody>
          </table>
          <!-- End Table with hoverable rows -->

        </div>
      </div>



</main><!-- End #main -->

  
@endsection



