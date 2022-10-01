<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>CK Editor Test</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
  integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>

 <div class="card">
  <div class="card-header card-header-primary">
   <h4 class="card-title">
    create form
   </h4>
  </div>

  <div class="card-body">
   <form action="}" method="POST" enctype="multipart/form-data">

    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
     <label for="name">name</label>
     <input type="text" id="name" name="name" class="form-control" required>

    </div>
    <div class="form-group">
     <label for="description"></label>
     <textarea id="description" name="description" class="form-control "></textarea>

    </div>
    <div>
     <input class="btn btn-danger" type="submit" value="Created ">
    </div>
   </form>
  </div>
 </div>
 <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> -->
 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

 <script src="//cdn.ckeditor.com/4.13.1/full/ckeditor.js"></script>

 <script>
 $(function() {
  CKEDITOR.replace('description');
  $(".textarea");
 });
 </script>
</body>

</html>