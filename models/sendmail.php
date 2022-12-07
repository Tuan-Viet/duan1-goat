<?php  
    use PHPMailer\PHPMailer\PHPMailer;
    function sendmail($user_email,$user_password){
        $name = "EX - Joey";  // Name of your website or yours
        $to = $user_email;  // mail of reciever
        $subject = "GOAT quên mật khẩu";
        $body = $user_password;
        $from = "thanhvt1509@gmail.com";  // you mail
        $password = "fkwhsygtsuouwaej";  // your mail password

        // Ignore from here

        require_once "./phpmailer/PHPMailer.php";
        require_once "./phpmailer/SMTP.php";
        require_once "./phpmailer/Exception.php";
        $mail = new PHPMailer();

        // To Here

        //SMTP Settings
        $mail->isSMTP();
        // $mail->SMTPDebug = 3;  Keep It commented this is used for debugging                          
        $mail->Host = "smtp.gmail.com"; // smtp address of your email
        $mail->SMTPAuth = true;
        $mail->Username = $from;
        $mail->Password = $password;
        $mail->Port = 587;  // port
        $mail->SMTPSecure = "tls";  // tls or ssl
        $mail->smtpConnect([
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            ]
        ]);

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($from, $name);
        $mail->addAddress($to); // enter email address whom you want to send
        $mail->Subject = ("$subject");
        $mail->Body = $body;
    }
?>