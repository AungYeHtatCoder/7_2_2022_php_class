<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Calendar</title>
</head>

<body>
 <form action="" method="POST">
  <!-- <select name="month">
   <option value="1">January</option>
   <option value="2">February</option>
   <option value="3">March</option>
   <option value="4">April</option>
   <option value="5">May</option>
   <option value="6">June</option>
   <option value="7">July</option>
   <option value="8">August</option>
   <option value="9">September</option>
   <option value="10">October</option>
   <option value="11">November</option>
   <option value="12">December</option>
  </select>
  <select name="year">
   <option value="2020">2020</option>
   <option value="2021">2021</option>
   <option value="2022">2022</option>
   <option value="2023">2023</option>
   <option value="2024">2024</option>
   <option value="2025">2025</option>
   <option value="2026">2026</option>
   <option value="2027">2027</option>
   <option value="2028">2028</option>
   <option value="2029">2029</option>
   <option value="2030">2030</option>
  </select>
  <input type="submit" value="Submit"> -->
 </form>
 <?php 
  // this script makes three pull down menus
  // for an HTML form: months, days, years

  // make the month associative array
  $months = array(1 => "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

  // make the month pull-down menu
  echo "<select name='month'>\n";
  foreach ($months as $key => $value) {
   echo "<option value='$key'>$value</option>\n";
  }
  echo "</select>\n";
  // $months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

  // make the day pull-down menu
  echo "<select name='day'>\n";
  for ($day = 1; $day <= 31; $day++) {
   echo "<option value='$day'>$day</option>\n";
  }
  echo "</select>\n";
  // make the year pull-down menu
  echo "<select name='year'>\n";
  for ($year = 2020; $year <= 2030; $year++) {
   echo "<option value='$year'>$year</option>\n";
  }
  echo "</select>\n";

  // make the submit button
  echo "<input type='submit' value='Submit'>\n";
  
 ?>
</body>

</html>