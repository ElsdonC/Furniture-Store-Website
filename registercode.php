<?php
include('admin/config/dbcon.php');

if (isset($POST['register_btn'])) {
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['cpassword']);
    if ($password == $confirm_password) {
        // Check Email
        $checkemail = "SELECT email FROM users WHERE email='$email'";

    } else {
        $_SESSION['message'] = "Passwords Do Not Match"
        header("Location: register.php");
        exit(0);
    }

} else {
    header("Location: register.php");
    exit(0);
}

?>