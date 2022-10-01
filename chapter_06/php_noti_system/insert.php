<?php 
if(isset($_POST["firstname"]))
{
 include("config/db_con.php");
 $firstname = mysqli_real_escape_string($link, $_POST["firstname"]);
 $lastname = mysqli_real_escape_string($link, $_POST["lastname"]);
 mysqli_query($link,"insert into `user` (firstname, lastname) values ('$firstname', '$lastname')");
}