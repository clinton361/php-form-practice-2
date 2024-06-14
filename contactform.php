<?php
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    if(!empty($email) && !empty($message)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $receiver = "osasclinton52@gmail.com";
            $subject = "From: $name <$email>";
            $body = "Name: $name\nEmail: $email\nPhone: $message\n\nRegards,\n$name";
            $sender = "From: $email";
            if(mail($receiver, $subject, $body, $sender)){
                echo "Your message has been sent";
            }else{
                echo "sorry, failed to send your message";
            }
        }else{
            echo "Enter a valid email address!";
        }
    }else{
        echo "Email and message field is required!";

    }


//  if (isset($POST['submit'])) {
//         $name = $_POST['name'];
//         $subject = $_POST['subject'];
//         $mailFrom = $_POST['mail'];
//         $message = $_POST['message'];
    
//         $mailTo = "osasclinton52@gmail.com";
//         $headers = "From: ".$mailFrom;
//         $txt = "You have received an e-mail from ".$name.".\n\n".$message;
    
//         mail($mailTo, $subject, $txt, $headers);
//         header("Location: index.php?mailsend");
//     } 



// echo "<pre>";

//     print_r($_POST);

// echo '</pre>';

//     $username = $_POST['name'];
//     $messageSubject = $_POST['subject'];
//     $userEmail = $_POST['mail'];
//     $message = $_POST['message'];

//     $to = "blah@blah.com";
//     $body = "";

//     $body .= "From: ".$userName. "\r\n";
//     $body .= "Email: ".$userEmail. "\r\n";
//     $body .= "From: ".$message. "\r\n";

//     mail($to, $messageSubject, $body);

?>




















