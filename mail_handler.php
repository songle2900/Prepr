<?php
if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $to = "ysong0430@gmail.com";
    $subject = "New Email Address for Mailing List";
    $body = '<html>
                <body>
                    <h2>New Email from visitor.</h2>
                    <hr>
                    <p>Name: '.$name.'</p>
                    <p>Email: '.$email.'</p>
                    <p>Phone: '.$phone.'</p>
                    <p>Message: '.$message.'</p>
                </body>
             </html>';

    // Headers
    $headers = "From: ".$name." <".$email.">\r\n";
    $headers .= "Reply-To: ".$email."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8";

    // Send
    $send = mail($to, $subject, $body, $headers);
}
?>