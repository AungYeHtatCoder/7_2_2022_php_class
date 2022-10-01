<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
 <!-- <table border="1" align="center" class="table">
  <tr>
   <td> <input type="button" id="display" value="Display All Data" /> </td>
  </tr>
 </table> -->
 <!-- <div id="responsecontainer" align="center">

 </div> -->
 <div class="container">
  <div class="row">
   <div class="col-lg-8">
    <div class="card">
     <div class="card-header">
      <h1>display data <span><button type="button" id="display" class="btn btn-primary">Click to View User</button>
       </span></h1>
     </div>
     <div class="card-body">
      <div class="table-responsive">
       <table class="table table-bordered" id="" width="100%" cellspacing="0">
        <thead>
         <tr>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Action</th>
         </tr>
        </thead>
        <tbody id="responsecontainer">

        </tbody>
       </table>
      </div>
     </div>
    </div>
   </div>
  </div>

  <script>
  $(document).ready(function() {
   $("#display").click(function() {
    $.ajax({
     url: "data_fetch.php",
     type: "GET",
     success: function(data) {
      $("#responsecontainer").html(data);
     }
    });
   });
  });
  </script>
</body>

</html>