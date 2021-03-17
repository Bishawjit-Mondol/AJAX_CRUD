$(document).ready(function() {

    $('#savebtn').on('click', function() {


      $("#savebtn").attr("disabled", "disabled");

      var name = $('#name').val();
      var phone = $('#phone').val();
      var city = $('#city').val();

      //alert(name);

      if (name != "" && phone != "" && city != "") {

        /*$.post("operation.php", {
          name: name,
          phone: phone,
          city: city
        }, function(data) {
          alert("holo");
        }, "json");*/

        $.ajax({
          url: "operation.php",
          method: "GET",
          data: {
            name: name,
            phone: phone,
            city: city
          },
          headers: {
            "Content-Type": "application/json",
            "X-Requested-With": "XMLHttpRequest"
          },
          dataType: "JSON",
          success: function(dataResult) {
            alert(dataResult);
          },
          error: function() {

          }
        });
      } else {
        alert('Please fill all the field !');
      }
    });
  });