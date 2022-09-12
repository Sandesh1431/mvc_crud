<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="<?php echo URLROOT . 'css/login.css' ?>">
  <title></title>
  <style>
</style>
</head>

<body style="background-color: #E8E8E8">
  <!-- <form action="<?php echo URLROOT . 'pages/add' ?>" method="post">
<button type="submit" name="submit">add</button>
</form> -->
<div class="card" style="width: 25%;     width: 25%;
    margin-left: 42em;
    margin-top: 12em;">
  <h4 class="card-header">Admin Login</h4>
  <div class="card-body">
  <div class="container">
    <h2></h2>
    <form action="<?php echo URLROOT . 'pages/login' ?>" enctype="multipart/form-data" method="post">
      <div class="form-group" style="width: 245%;">
        <label for="email">Username:</label>
        <input type="text" class="form-control" id="email" placeholder="Enter name" name="name" required>
      </div>
      <div class="form-group" style="width: 245%; margin-top:1em;">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password"
         name="pass" style="margin-bottom: 1em;" required>
      </div>
      <!-- <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div> -->
      <div class="form-group" style="margin-bottom: 1em; color:red;">
        <?php
        if (isset($data)) {
          echo $data['title'];
        }
        ?>
      </div>
      <div style="display: flex;">
        <button type="submit" class="btn btn-default" style="margin-right: 15px; border-color: #b3b3b3;">Submit</button>
    </form>
    <form action="<?php echo URLROOT . 'pages/guest' ?>" enctype="multipart/form-data" method="post">
      <button class="btn btn-default" style="border-color: #b3b3b3;">Guest</button>
    </form>
  </div>
  </div>

  </div>
</div>
<script></script>
 
  
<script>
  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}

  </script>
</body>

</html>