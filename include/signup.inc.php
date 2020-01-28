<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require '../vendor/autoload.php';
require 'credentials.php';
if (isset($_POST['signup_button'])) {
    require_once("dbController.php");
    $db_handle = new DBController();
    $useremail = $_POST["username"];
    $userpassword = $_POST["pass"];
    $query = "SELECT * FROM users where useremail = '$useremail'";
    $count = $db_handle->numRows($query);
    if ($count == 0) {
        $anotherquery = "INSERT INTO users (useremail,password) VALUES('$useremail','$userpassword')";
        $current_id = $db_handle->insertQuery($anotherquery);
        if ($current_id == "success") {
            $mail = new PHPMailer(TRUE);
            /* Open the try/catch block. */
            try {
                /* Set the mail sender. */
                $mail->setFrom('faizank575@gmail.com', 'Faizan Khan');
                $mail->IsHTML(true);

                /* Add a recipient. */
                $mail->addAddress($useremail);

                /* Set the subject. */
                $mail->Subject = 'Test Email';

                $actual_link = "http://$_SERVER[HTTP_HOST]/WebProject/include/" . "activation.php?username=" . $useremail;

                /* Set the mail message body. */
                $mail->Body = "Click this link to activate your account. <a href='" . $actual_link . "'>" . $actual_link . "</a>";


                /* Tells PHPMailer to use SMTP. */
                $mail->isSMTP();

                /* SMTP server address. */
                $mail->Host = 'smtp.gmail.com';

                /* Use SMTP authentication. */
                $mail->SMTPAuth = TRUE;

                /* Set the encryption system. */
                $mail->SMTPSecure = 'tls';

                /* SMTP authentication username. */
                $mail->Username = $email;

                /* SMTP authentication password. */
                $mail->Password = $password;

                /* Set the SMTP port. */
                $mail->Port = 587;

                /* Finally send the mail. */
                $mail->send();
            } catch (Exception $e) {
                /* PHPMailer exception. */
                echo $e->errorMessage();
            } catch (\Exception $e) {
                /* PHP exception (note the backslash to select the global namespace Exception class). */
                echo $e->getMessage();
            }
            unset($_POST);
            header("Location:../Signin.php?activation=emailhasbeensent");
        } else {
            $message = "Problem in registration. Try Again!";
        }
    } else {
        $message = "User Email is already in use.";
        $type = "error";
        echo $message;
    }
}
