
<?php

require("includes/common.php");

$email = $_POST['email'];
$password = $_POST['password'];
$email = mysqli_real_escape_string($conn, $email);
$password = mysqli_real_escape_string($conn, $password);
$password = MD5($password);

$query = "SELECT email, id FROM users WHERE email='" . $email . "' AND password='" . $password . "'";

$query_result = mysqli_query($conn, $query)or die($mysqli_error($conn));

if(mysqli_num_rows($query_result) == 0){
$error = "<span class='red'>Incorrect user account details </span>";
  header('location: login.php?error=' . $error);
} else {
  $row = mysqli_fetch_array($query_result);
   $_SESSION['user_id'] = $row['id'];
  $_SESSION['email'] = $row['email'];
 
  header('location: products.php');
}
?>