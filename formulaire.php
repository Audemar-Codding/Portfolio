<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "votre@email.com";
    $subject = "Nouveau message de contact";
    $headers = "De : $email";

    mail($to, $subject, $message, $headers);

}
?>