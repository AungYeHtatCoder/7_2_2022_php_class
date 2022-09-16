<?php 
include("../functions.php");

if (isset($_POST['login']) && isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $user_login = user_login_with_role($email, $password);
    if ($user_login) {
        if ($_SESSION['value'] == 1) {
            header('Location: ../admin/admin_profile.php');
        } else {
            header('Location: ../index.php');
        }
    } else {
        header('Location: ../login_form.php');
    }
    
}