<?php
session_start();
require_once('core/db.php');

function sanitize($data) {
    $text = trim($data);
    $text = stripslashes($text);
    $text = htmlspecialchars($text);

    return $text;
}

// print_r($_POST);

if(isset($_POST['submit'])){
    $fullName = $_POST['fullname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    // validate inputs
    
$errors = "";
    // validation for Full Name
    if(empty($fullName)){
        $errors .= "your full name field is empty";
    } elseif (strlen($fullName) < 2) {
        $errors .= "<br> Full Name cannot be less than 2";
    }else{
        $fullName = sanitize($fullName);
    }
    // validation for Subject
    if(empty($subject)){
        $errors .= "<br>your subject field is empty";
    } elseif (strlen($subject) < 2) {
        $errors .= "<br> subject cannot be less than 2";
    }else{
        $subject = sanitize($subject);
    }
    // validation for Message
    if(empty($message)){
        $errors .= "<br>your Message field is empty";
    } elseif (strlen($message) < 2) {
        $errors .= "<br> Message cannot be less than 2";
        
    }else{
        $message = sanitize($message);
    }
    
     
   
    // VAlidation for email
    if(empty($email)){
        $errors .= "<br>your email is empty";
        
    }elseif(strlen($email) < 5){
        $errors .= "<br>Email must not be less than 5";
    } else{
        $email = sanitize(filter_var($email, FILTER_SANITIZE_EMAIL));
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors .= "Enter a valid email address";   
        }
    }

     
     if($errors){
        
        $_SESSION['error'] = '<div class="alert alert-danger">' . $errors . '</div>';

        header("Location: index.php");
    }else{
        $sql = "INSERT INTO tbl_form (`fullname`, `subject`,`email`, `message`) VALUES('$fullName', '$subject', '$email', '$message')";
        $query = mysqli_query($db_connect, $sql);
        if(!$query){
            $error_db = '<div class="alert alert-danger">There was an error when sending the form</div>'; 
            $_SESSION['error'] = $error_db; 
            
        }else{
            $success_msg = '<div class="alert alert-success">You have successfully filled the form, Will get back to you soon😉 </div>'; 
            $to = "$email";
            $subject = "$subject";
            $txt = "$message";
            $headers = "From: resume@hng.com";
            mail($to,$subject,$txt,$headers);

            $_SESSION['success'] = $success_msg;
            header("location:index.php");
        }
    }
    
}


?>