<?php
include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Information</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
</head>

<body>
  <br>
  <div class="container">
    <form id="fupForm" name="form1">

      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name" placeholder="Your name" name="name">
        </div>
      </div>

      <div class="form-group row">
        <label for="phone" class="col-sm-2 col-form-label">phone</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="phone" placeholder="Your Phone Number" name="phone">
        </div>
      </div>

      <div class="form-group row">
        <label for="city" class="col-sm-2 col-form-label">City</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="city" placeholder="Your city name" name="city">
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-10">
          <button type="button" class="btn btn-primary" id="savebtn" name="submit">Submit</button>
        </div>
      </div>

    </form>
  </div>


  <script src="jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="ajax.js"></script>

</body>

</html>