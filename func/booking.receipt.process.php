<?php
    include("database-connect.func.php");
    include("booking.func.php");
    if(isset($_POST['card_submit'])) {
        init_creditCard($conn,$_POST['receipt'],$_POST['pay_method'],$_POST['discount'],
        $_POST['subtotal'],$_POST['tax'],$_POST['cardno'],$_POST['cardname'],$_POST['cardexp'],$_POST['cvv']);
        book($conn,$_POST['ticket_id'],$_POST['passportno'],$_POST['receipt']);
    }
    else if(isset($_POST['scb_submit'])) {
        echo "scb";
    }
    else if(isset($_POST['counter_submit'])) {
        echo "counter";
    }
    else {
        echo "You're not supposed to be here!";
    }
?>