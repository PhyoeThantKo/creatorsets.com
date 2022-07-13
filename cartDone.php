<?php
    include('admin/config/config.php');
    if(isset($_POST['submit'])){
    if(!empty($_POST['payment_sequence'])) {
        $paymentSequence = $_POST['payment_sequence'];
        echo $paymentSequence;
        /*$sql = "INSERT INTO products (title, price, created_date, modified_date") VALUES ( $paymentSequence, );*/
    } else {
        echo 'Please select the value.';
    }
    }
?>