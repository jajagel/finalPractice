<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Customer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/store/customer" method="POST">
          @csrf
          <div class="mb-3">
            <label for="fname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="fname" name="fname" value="">
          </div>
          <div class="mb-3">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lname" name="lname" value="">
          </div>
          <div class="mb-3" >
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="">
          </div>
          <div class="mb-3" >
            <label for="contact" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="contact" name="contact" value="">
          </div>
          <div class="mb-3" >
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="">
          </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn button btn-secondary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>