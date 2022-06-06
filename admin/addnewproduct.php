<?php
     include("../admin/config/config.php");
     $name = $_POST['name'];
     $price = $_POST['price'];
     $yearly_price = $_POST['yearly_price'];
     $cms = $_POST['cms'];

     $sql = "INSERT INTO products (name, price, yearly_price, cmstheme, created_date, modified_date) VALUES ('$name', '$price', '$yearly_price', '$cms', now(), now() )";
     mysqli_query($conn, $sql);
     header("location: index.php");
?>