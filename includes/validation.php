<?php
    
    // print_r($_POST);
    // Variables 
    $name_error = $email_error = $subject_error = $message_error = "";
    $name = $email = $subject = $message = '';

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(empty($_POST['name'])){
            $name_error = "Name is required*";
        }else{
            $name = input_data($_POST['name']);
            if(!preg_match("/^[a-zA-z ]*$/", $name)){
                $name_error = "Only letters and white space allowed";
            }
        }

        if(empty($_POST['email'])){
            $email_error = "Email is required*";
        }else{
            $email = input_data($_POST['email']);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $email_error = "Invalid email format";
            }
        }

        if(empty($_POST['subject'])){
            $subject_error = "Subject is required*";
        }else{
            $subject = input_data($_POST['subject']);
        }

        if(empty($_POST['message'])){
            $message_error = "Message is required*";
        }else{
            $message = input_data($_POST['message']);
        }

        if( $name_error == "" and $email_error == "" and $subject_error == "" and $message_error=="")
        {
            $message_text = '';
            unset($_POST['submit']);
            foreach($_POST as $key => $value){
                $message_text .= "$key: $value\n";
            }

            $to = "dspguru97@gmail.com";
            $subject = "Contact Form Submit";

            if(mail($to, $subject, $message_text)){
                $success = "Message Sent, We will get back to you soon!";
                $name = $email = $subject = $message = '';
            }
        }
    }

    function input_data($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>