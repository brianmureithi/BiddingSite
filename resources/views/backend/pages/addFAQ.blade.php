@extends('backend.layouts.layout')

@section('content')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add FAQ</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Add FAQs</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="card">
            <div class="card-body">
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
                        
                  @elseif($message = Session::get('fail-faq-terrible '))
                  <div class="alert alert-danger">
                      <p>{{ $message }}</p>
                </div>       
                @endif 

              <h5 class="card-title">FAQ</h5>

              <!-- Vertical Form -->
              <form action ="{{route('store.faqs')}}" method="POST" class="row g-3">
                @csrf
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Enter question</label>
                  <input type="text" name="question" class="form-control" id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Answer</label>
                  <input type="text" name="answer" class="form-control" id="inputEmail4">
                </div>
              
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>

     
    </section>

  </main><!-- End #main -->

  
@endsection