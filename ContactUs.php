<?php

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $link = mysqli_connect("localhost", "root", "", "test");
    if($link ==  false){
        die("ERROR" . mysqli_connect_error());
    }
    $sql = "INSERT INTO contact (firstName, lastName, email, phone, message) VALUES ('$firstName', '$lastName', '$email', '$phone', '$message')";
    if(mysqli_query($link, $sql)){
        echo "Data added successfully.";
    }
    else{
        echo "Error" . mysqli_error($link);
    }
    mysqli_close($link);

?>