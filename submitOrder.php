<?php
    include('admin/config/config.php');

    $paymentSequence = $_POST['payment_sequence'];
    $price = $_POST['total'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $paymentMethod = $_POST['payment_method'];
    $product_id = $_POST['product_id'];

    $sql = "INSERT INTO orders (payment_sequence, price, name, email, password, payment_method, product_id, created_date, modified_date) VALUES ('$paymentSequence', '123', '$name', '$email', '$password', '$paymentMethod', '3', now(), now() )";
    mysqli_query($conn, $sql);
    echo "order complected";
    //header("location: index.php");
?>