
<div class="modal fade" id="verticalproduct" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Update Product </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <form class="row g-3" method="POST" action="{{route('store.product')}}" enctype="multipart/form-data">
                @csrf
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="inputNanme4" placeholder="Enter product name E.g LG TV">
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
                
  
                      <div class="card" style="max-height:30vh !important; overflow:hidden">
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

