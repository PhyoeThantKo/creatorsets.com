<?php
     include("../admin/config/config.php");
     $order_id = $_GET['orderid'];
     $confirm_status = $_POST['confirm_status'];

     $sql = "UPDATE orders SET confirm_payment='$confirm_status', modified_date=now() WHERE id='$order_id'";
     mysqli_query($conn, $sql);
?>