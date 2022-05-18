<?php
    if(isset($_POST['continue'])){
    if(!empty($_POST['payment_sequence'])) {
        echo '  ' . $_POST['payment_sequence'];
    } else {
        echo 'Please select the value.';
    }
    }
?>