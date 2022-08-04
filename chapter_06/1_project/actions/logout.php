<?php
include("../config/db_con.php");
// user logout
if(isset($_GET['logout'])){
    session_destroy();
    header("Location: ../index.php");
}