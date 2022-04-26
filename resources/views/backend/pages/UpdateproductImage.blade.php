
<div class="modal fade" id="verticalycentered" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Change Image </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <form class="row g-3" method="POST" action="{{route('store.product')}}" enctype="multipart/form-data">
                @csrf
          
                <div class="col-12">
                    <label for="inputEmail4" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" placeholder="Enter item's image" id="inputEmail4">
                  </div>
              
               
  
  
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </form><!-- Vertical Form -->
  
         
        </div>
        
        <{{-- div class="icon">
            <i class="bi bi-heart-fill"></i>
            <div class="label">heart-fill</div>
          </div> --}}
        <div class="modal-footer">
         Made with <span> <i class="bi bi-heart-fill"></i></span> for humanity 
        </div>
      </div>
    </div>
  </div><!-- End Vertically centered Modal-->
