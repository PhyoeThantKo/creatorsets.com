<?php
     include("../admin/config/config.php");
     $product_name = $_POST['product_name'];
     $site = $_POST['site'];
     $domain = $_POST['domain'];
     $diskspace = $_POST['diskspace'];
     $bandwidth = $_POST['bandwidth'];
     $ssl = $_POST['ssl'];
     $support = $_POST['support'];
     $comment = $_POST['comment'];
     
     $sql = "INSERT INTO features (product_name, site, domain, disk_space, bandwidth, ssl_status, support, comment, created_date, modified_date) VALUES ('$product_name', '$site', '$domain', '$diskspace', '$bandwidth', '$ssl', '$support', '$comment', now(), now() )";
     mysqli_query($conn, $sql);
     header("location: index.php");
?>