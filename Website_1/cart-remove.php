

<?php

require("includes/common.php");

if (isset($_GET['id'])) {

    $user_id = $_SESSION['user_id'];
    $item_id = $_GET["id"];
    

    $query = "DELETE FROM users_items WHERE user_id='$user_id' AND  item_id='$item_id' ";
    $query_result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    header("location:cart.php");
}
?>