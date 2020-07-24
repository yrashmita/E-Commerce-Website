<?php
require("includes/common.php");

if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$old = $_POST['old_password'];
$new = $_POST['new_password'];
$retype = $_POST['retype_password'];
$old = mysqli_real_escape_string($conn, $old);
$old = MD5($old);
$new= mysqli_real_escape_string($conn, $new);
$new= MD5($new);
$retype = mysqli_real_escape_string($conn, $retype);
$retype= MD5($retype);


$query = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
$query_result = mysqli_query($conn, $query)or die($mysqli_error($conn));
$row = mysqli_fetch_array($query_result);

$real= $row['password'];

  if ($new != $retype) {
    header('location: settings.php?error=Passwords not matching.');
}

else {
    
    if ($old != $real) {

        header('location: settings.php?error=Old password is wrong.');

    } else {

        $query = "UPDATE  users SET password = '" . $new . "' WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($conn, $query) or die($mysqli_error($conn));

        header('location: settings.php?error= Password Updated Successfully');


    }
        
}


?>