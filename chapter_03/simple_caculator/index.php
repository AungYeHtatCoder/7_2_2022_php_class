<?php 
// simple  calculator process
if (isset($_POST['submit'])) {
 $number1 = $_POST['number1'];
 $number2 = $_POST['number2'];
 $operator = $_POST['operator'];

$result = 0;
if ($operator == '+') {
 $result = $number1 + $number2;
} else if ($operator == '-') {
 $result = $number1 - $number2;
} else if ($operator == '*') {
 $result = $number1 * $number2;
} else if ($operator == '/') {
 $result = $number1 / $number2;
}
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Simple Caculator Project</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1 class="text-center">Simple Calculator</h1>
          <div class="card">
           <div class="card-header">
            <h3 class="card-title">Simple Calculator</h3>
           </div>
           <div class="card-body">

            <form action="index.php" method="post">
            <div class="form-group">
              <label for="number1">Number 1</label>
              <input type="number" class="form-control" id="number1" name="number1" placeholder="Enter number 1">
            </div>
            <div class="form-group">
              <label for="number2">Number 2</label>
              <input type="number" class="form-control" id="number2" name="number2" placeholder="Enter number 2">
            </div>
            <div class="form-group">
              <label for="operator">Operator</label>
              <select class="form-control" id="operator" name="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
              </select>
            </div>
            <div class="mb-3 mt-3">
             <input type="submit" name="submit" class="btn btn-primary" value="Calculate">
            </div>
          </form>
           </div>
          </div>
        </div>
        <div class="col-md-4 mt-5">
          <div class="card">
           <div class="card-header">
            <h3 class="card-title">Result</h3>
           </div>
           <div class="card-body">
            <p class="text-center">
              <?php
               if(isset($result)){
                echo $result;
              } ?>
              
            </p>
           </div>
          </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>