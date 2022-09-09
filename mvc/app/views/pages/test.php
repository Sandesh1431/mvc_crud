<div id="myModal" class="modal">

  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Employee Details.</p>
    <form action="<?php echo URLROOT . 'pages/emp_add' ?>" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col">
          <input type="text" name="first_name" class="form-control" placeholder="First name">
        </div>
        <div class="col">
          <input type="text" name="last_name" class="form-control" placeholder="Last name">
        </div>
        <div class="col">
          <input type="email" name="email" class="form-control" placeholder="Email">
        </div>
      </div>
      <div class="row" style="margin-top: 20px;">
        <div class="col">
          <input type="number" name="no" class="form-control" placeholder="Phone no">
        </div>
        <div class="col">
          <input type="text" name="street" class="form-control" placeholder="Street">
        </div>
        <div class="col">
          <input type="text" name="city" class="form-control" placeholder="City">
        </div>
        <div class="row" style="margin-top: 20px;">
          <div class="col">
            <input type="text" name="state" class="form-control" placeholder="State">
          </div>
          <div class="col">
            <input type="text" name="country" class="form-control" placeholder="Country">
          </div>
          <div class="col">
            <input type="number" name="zip" class="form-control" placeholder="Zip">
          </div>
          <div class="row" style="margin-top: 20px;">
            <div class="col">
              <input type="text" name="file" class="form-control" placeholder="Photo">
            </div>

          </div>
        </div>
        <button type="submit" style="margin-top: 20px; width:8%">Submit</button>
    </form>
  </div>

</div>






<!-- edit popup ends -->




<script>
  // Get the modal
  var modal = document.getElementById("myModal");

  // Get the button that opens the modal
  var btn = document.getElementById("myBtn");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks the button, open the modal 
  btn.onclick = function() {
    modal.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>