<?php 

session_start();
echo "<h1> Welcome to the session demo </h1>" . $_SESSION['user'];