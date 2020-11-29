<?php
    
    // print_r($_POST);
    // Variables 
    $name_error = $email_error = $subject_error = $message_error = "";
    $name = $email = $subject = $message = '';

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(empty($_POST['name'])){
            $name_error = "Name is required*";
        }else{
            $name = test_input($_POST['name']);
            if(!preg_match("/^[a-zA-z]*$/", $name)){
                $name_error = "Only letters and white space allowed";
            }
        }

        if(empty($_POST['email'])){
            $email_error = "Email is required*";
        }else{
            $email = test_input($_POST['email']);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $email_error = "Invalid email format";
            }
        }

        if(empty($_POST['subject'])){
            $subject_error = "Subject is required*";
        }else{
            $subject = test_input($_POST['subject']);
        }

        if(empty($_POST['message'])){
            $message_error = "Message is required*";
        }else{
            $message = test_input($_POST['message']);
        }
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>