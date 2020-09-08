<?php 
    
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $description = $_POST['description'];

        $mailTo = "francis6797@outlook.com";
        $header = "From: ".$email;

        mail($mailTo, $subject, $description, $header);
    }
?>