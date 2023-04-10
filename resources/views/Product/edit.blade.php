<div class="modal fade" id="editModal{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update #{{$product->id}}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{url('update/product/'.$product->id)}}" method="POST">
          @csrf
          <div class="mb-3" align="left">
            <label for="prodname" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="prodname" name="prodname" value="{{$product->prodname}}">
          </div>
          <div class="mb-3" align="left">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="text" class="form-control" id="quantity" name="quantity" value="{{$product->quantity}}">
          </div>
          <div class="mb-3" align="left">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{$product->price}}">
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