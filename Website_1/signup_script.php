<?php

require("includes/common.php");

  $name = $_POST['name'];
  $email = $_POST['email'];//e-mail
  $contact = $_POST['contact'];
  $password = $_POST['password'];
  $address = $_POST['address'];
  $city = $_POST['city'];

  $name = mysqli_real_escape_string($conn, $name);
  $email = mysqli_real_escape_string($conn, $email);
  $password = mysqli_real_escape_string($conn, $password);
  $password = MD5($password);
  $contact = mysqli_real_escape_string($conn, $contact);
  $city = mysqli_real_escape_string($conn, $city);
  $address = mysqli_real_escape_string($conn, $address);

  
  $query = "SELECT * FROM users WHERE email='$email'";
  $query_result = mysqli_query($conn, $query)or die($mysqli_error($conn));

  if (mysqli_num_rows($query_result) > 0) {
    $error = "<span class='red'>Email Already Exists</span>";
    header('location: signup.php?error=' . $error);
  }

 else {

    $query = "INSERT INTO users(name, email, password, contact, city, address)VALUES('" . $name . "','" . $email . "','" . $password . "','" . $contact . "','" . $city . "','" . $address . "')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    $user_id = mysqli_insert_id($conn);
    
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: products.php');
  }
?>