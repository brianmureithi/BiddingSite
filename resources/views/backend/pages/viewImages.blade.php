@extends('backend.layouts.layout')

@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Gallery</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Images</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
                    <p>{{ $message }}</p>
        </div>
        @elseif($message = Session::get('fail'))
            <div class="alert alert-danger">
                <p>{{ $message }}</p>
          </div>  
                
          @elseif($message = Session::get('fail-faq-terrible '))
          <div class="alert alert-danger">
              <p>{{ $message }}</p>
        </div>       
        @endif 
   
<div class="col-lg-12">
    <div class="card">
    <div class="row" style="padding:10px 12px">
     
        @forelse ($images as $image )
        <div class="col-lg-4">
        <img src="{{URL:: asset('/storage/img/Gallery/'.$image->image) }}" alt="{{$image->image}}" style="min-height:30vh; max-height:30vh; object-fit:cover; max-width:500px; min-width:500px" class="img-thumbnail">
        <div class="gallery-btn">
            <button class="btn btn-danger del-gallery"  onclick="  confirm('You are about to delete image {{$image->id }} ?') ? document.getElementById('delete-image-{{$image->id}}').submit() : ''  ">Delete</button>

        </div>
        <form action=" {{route('destroy-image-route',$image->id)}}" method="post" id="delete-image-{{$image->id}}">
            @csrf
            @method('DELETE')
        </form>
    </div>

       

    
        @empty
        <div class="alert alert-danger">
            Seems like there are no images available

        </div>
            
        @endforelse

    </div>
</div>

</div>
     
    </section>

  </main><!-- End #main -->

  
@endsection