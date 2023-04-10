<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Product</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="store/product" method="post">
          @csrf
          <div class="mb-3" align="left">
            <label for="prodname" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="prodname" name="prodname" >
          </div>
          <div class="mb-3" align="left">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="text" class="form-control" id="quantity" name="quantity" >
          </div>
          <div class="mb-3" align="left">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" >
          </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn button btn-secondary">Save changes</button>
      </div>
    </div>
    </form>
  </div>
</div>