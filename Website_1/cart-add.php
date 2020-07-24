

<?php
require("includes/common.php");
if (isset($_GET['id'])) {
	$user_id = $_SESSION['user_id'];

    $item_id = $_GET['id'];
   
    $query = "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
    $query_result=mysqli_query($conn, $query) or die(mysqli_error($conn));
    header('location: products.php');
}
?>