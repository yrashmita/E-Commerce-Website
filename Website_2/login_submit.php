
<?php

require("includes/common.php");


    $email = $_POST['email'];
    $email = mysqli_real_escape_string($con, $email);
    $email = strip_tags($email);

    $password = $_POST['password'];
    $password = mysqli_real_escape_string($con, $password);
    $password = strip_tags($password);
    $password = MD5($password);

    $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

    $query = "SELECT id, email FROM users WHERE email='" . $email . "' AND password='" . $password . "'";
    $result = mysqli_query($con, $query)or die($mysqli_error($con));
    $num = mysqli_num_rows($result);

    if ($num == 0) {
        $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
        header('location: login.php?error=' . $error);
    } else {
        $row = mysqli_fetch_array($result);
        $_SESSION['email'] = $row['email'];
        $_SESSION['user_id'] = $row['id'];
        header('location: products.php');
    }

?>