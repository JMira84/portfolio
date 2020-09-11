<?php
require("./vendor/autoload.php");
require("config.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$json = file_get_contents('php://input');
$data = json_decode($json, true);

if($_SERVER["REQUEST_METHOD"] === "POST" && $url_parts[2] === "message") {
    foreach($data as $key => $value) {
        $data[$key] = strip_tags(trim($value));
    }

    if(
        !empty($data["name"]) &&
        (mb_strlen($data["name"]) >= 2 ||
        mb_strlen($data["name"]) < 120) &&
        !empty($data["subject"]) &&
        (mb_strlen($data["subject"]) >= 3 ||
        mb_strlen($data["subject"]) < 120) &&
        !empty($data["message"]) &&
        filter_var($data["email"], FILTER_VALIDATE_EMAIL)
    ) {
        $mail = new PHPMailer;

        $mail->CharSet = 'UTF-8';

        $mail->isSMTP();

        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;

        // $mail->SMTPDebug = 2;

        $mail->Host = "smtp.gmail.com";

        $mail->Port = 587;

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        $mail->SMTPAuth = true;

        $mail->Username = $email_address;

        $mail->Password = $email_password;

        $mail->setFrom($data["email"], $data["name"]);

        $mail->addAddress($email_address, $name);

        $mail->Subject = $data["subject"];

        $mail->Body = $data["message"] . "\n" . $data["email"]; 

        if (!$mail->send()) {
            die('Erro de envio: ' . $mail->ErrorInfo);
        } else {
            $email_message = "Mensagem enviada";
        }
    } else {
        die("Por favor, preencha a área de texto.");
    }
}

require("views/home.php");