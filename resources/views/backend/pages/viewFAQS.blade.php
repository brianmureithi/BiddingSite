@extends('backend.layouts.layout')

@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Bids</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <div class="card">
        <div class="card-body">
          <h5 class="card-title">All bids</h5>
         
     
              
          <!-- Table with hoverable rows -->
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Question</th>
                <th scope="col">Answer</th>
                <th scope="col">Created at</th>
              
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($allfaqs as $faq)
                    
                
              <tr>
              
                <td>{{$faq->id}}</td>
                <td>{{$faq->question}}</td>
                <td>{{$faq->answer}}</td>
         
                <td>{{$faq->created_at->diffForHumans()}}</td>
                <td>
               
                {{--  <a href="#" data-toggle="modal" data-target="#edit-post-{{$post->id}}" class="btn btn-success btn-sm p-5">edit</a> --}}
                    <a href="#" class="btn btn-danger btn-sm" onclick="  confirm('You are about to delete faq {{$faq->id }} {{$faq->amount }}  ?') ? document.getElementById('delete-faq-{{$faq->id}}').submit() : ''  ">delete</a>
                    <form action="{{-- {{route('destroy-post-route',$post->id)}} --}}" method="post" id="delete-faq-{{$faq->id}}">
                        @csrf
                        @method('DELETE')
                    </form>
                  {{--   @include('admin.dashboard.editPostPopup') --}}
                </td>
              </tr>
          
              @empty
              <div class="alert alert-danger">
                  Seems like there are no faqs at the moment
              </div>
                    
                @endforelse
            
             
            </tbody>
          </table>
          <!-- End Table with hoverable rows -->

        </div>
      </div>

  </main><!-- End #main -->

  
@endsection