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
    <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    </div>
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

  <div class="container">
    <h2>All User data</h2>
    <table class="table table-bordered table-sm">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Phone</th>
          <th>City</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody id="table">

      </tbody>
      <tfoot>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>City</th>
        <th>Action</th>
      </tfoot>
    </table>
  </div>

  <!-- Modal Update-->
  <div class="modal fade" id="update_country" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header" style="color:#fff;background-color: #e35f14;padding:6px;">
          <h5 class="modal-title"><i class="fa fa-edit"></i> Update</h5>

        </div>
        <div class="modal-body">

          <!--1-->
          <div class="row">
            <div class="col-md-3">
              <label>Name</label>
            </div>
            <div class="col-md-9">
              <input type="text" name="name_modal" id="name_modal" class="form-control-sm" required>
            </div>
          </div>

          <!--3-->
          <div class="row">
            <div class="col-md-3">
              <label>Phone</label>
            </div>
            <div class="col-md-9">
              <input type="text" name="phone_modal" id="phone_modal" class="form-control-sm" required>
            </div>
          </div>
          <!--4-->
          <div class="row">
            <div class="col-md-3">
              <label>City</label>
            </div>
            <div class="col-md-9">
              <input type="text" name="city_modal" id="city_modal" class="form-control-sm" required>
            </div>
          </div>
          <input type="text" name="id_modal" id="id_modal" class="form-control-sm">
        </div>
        <div class="modal-footer" style="padding-bottom:0px !important;text-align:center !important;">
          <p style="text-align:center;float:center;"><button type="submit" id="update_data" class="btn btn-default btn-sm" style="background-color: #e35f14;color:#fff;">Save</button>
            <button type="button" class="btn btn-default btn-sm" data-dismiss="modal" style="background-color: #e35f14;color:#fff;">Close</button>
          </p>

        </div>
      </div>
    </div>
  </div>
  <!-- Modal End-->


  <!-- Delete Modal HTML -->
  <div id="deleteEmployeeModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>

          <div class="modal-header">
            <h4 class="modal-title">Delete User</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
            <input type="text" id="id_d" name="id" class="form-control">
            <p>Are you sure you want to delete these Records?</p>
            <p class="text-warning"><small>This action cannot be undone.</small></p>
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
            <button type="button" class="btn btn-danger" id="delete">Delete</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- View Data -->
  <script>
    $(document).ready(function() {
      $.ajax({
        url: "operation_view.php",
        method: "GET",
        success: function(data) {
          $('#table').html(data);
        }
      });
    });
  </script>

  <!-- Update Data -->
  <script>
    $(document).ready(function() {
      $.ajax({
        url: "operation_view.php",
        method: "GET",
        success: function(dataResult) {
          $('#table').html(dataResult);
        }
      });
      $(function() {
        $('#update_country').on('show.bs.modal', function(event) {

          var button = $(event.relatedTarget); /*Button that triggered the modal*/
          var id = button.data('id');
          var name = button.data('name');
          var phone = button.data('phone');
          var city = button.data('city');

          console.log(id);
          var modal = $(this);
          modal.find('#name_modal').val(name);
          modal.find('#phone_modal').val(phone);
          modal.find('#city_modal').val(city);
          modal.find('#id_modal').val(id);
        });
      });

      $(document).on("click", "#update_data", function() {
        $.ajax({
          url: "operation_update.php",
          method: "GET",
          data: {
            id: $('#id_modal').val(),
            name: $('#name_modal').val(),
            phone: $('#phone_modal').val(),
            city: $('#city_modal').val(),
          },

          success: function(dataResult) {
            console.log(dataResult);
            var dataResult = JSON.parse(dataResult);
            if (dataResult.statusCode == 200) {
              $('#update_country').modal().hide();
              alert('Data updated successfully !');
              location.reload();
            }
          },
          error: function(error_msg) {
            console.log(error_msg);
          }
        });
      });
    });
  </script>

  <!-- Delete Data -->
  <script>
    $(document).on("click", ".delete", function() {
      var id = $(this).attr("data-id");
      $('#id_d').val(id);
      console.log(id);

    });
    $(document).on("click", "#delete", function() {

      $.ajax({
        url: "operation_delete.php",
        method: "GET",
        data: {
          id: $("#id_d").val()
        },
        success: function(dataResult) {
          $('#deleteEmployeeModal').modal('hide');
          alert('Data deleted successfully !');
          window.location.reload();
        }
      });
    });
  </script>
  <script src="ajax.js"></script>

</body>

</html>