<?php

include("../vendor/autoload.php");



session_start();
unset($_SESSION['user']);

header("Location: ../login_form.php");