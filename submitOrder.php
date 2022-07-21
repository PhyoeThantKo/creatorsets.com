<?php
    include('admin/config/config.php');

    $paymentSequence = $_POST['payment_sequence'];
    $price = $_POST['total'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $paymentMethod = $_POST['payment_method'];
    $product_id = $_POST['product_id'];
    $mobile_ss = $_FILES['mobile_ss']['name'];
    $mo_tmp = $_FILES['mobile_ss']['tmp_name'];
    $bank_ss = $_FILES['bank_ss']['name'];
    $bank_tmp = $_FILES['bank_ss']['tmp_name'];


    if (move_uploaded_file($mo_tmp, "payments/mobile/".$mobile_ss)) {
        echo "File is valid, and was successfully uploaded.\n";
    } else {
        if (move_uploaded_file($bank_tmp, "payments/bank/".$bank_ss)) {
            echo "File is valid, and was successfully uploaded.\n";
        } else {
            echo "Possible file upload attack!\n";    
        };    
    };

    $sql = "INSERT INTO orders (payment_sequence, price, name, email, password, payment_method, product_id, mobile_ss, bank_ss, created_date, modified_date) VALUES ('$paymentSequence', '$price', '$name', '$email', '$password', '$paymentMethod', '$product_id', '$mobile_ss', '$bank_ss', now(), now() )";
    mysqli_query($conn, $sql);
    echo "order complected";
?>