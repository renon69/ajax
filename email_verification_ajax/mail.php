<?php
    if(isset($_POST['submit'])) {
        //this vardiables are fomr message.js
            $name = $_POST['name'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $message = $_POST['message'];

            $errorEmpty = false;
            $errorEmail = false;

            if (empty($name) || empty($email) || empty($message)) {
                echo "<span class='text-red-500'>fill in all the fields</span>";
                $errorEmpty = true;
            }
            elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<span class='text-red-500'>enter valid email</span>";
                $errorEmail = true;
            }
            else {
                echo "<span class='text-green-500'>message sent successfully</span>";
            }
    }
?>