<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "doctorbroter@gmail.com"; // Замените на ваш адрес электронной почты
    $subject = "Новое сообщение с формы на сайте";
    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $mail_content = "Email: $email\n";
    $mail_content .= "Имя: $name\n";
    $mail_content .= "Номер телефона: $phone\n";
    $mail_content .= "Сообщение:\n$message";

    $headers = "From: $email \r\n";
    $headers .= "Reply-To: $email \r\n";

    if (mail($to, $subject, $mail_content, $headers)) {
        http_response_code(200);
    } else {
        http_response_code(500);
    }
} else {
    http_response_code(403);
}
?>
