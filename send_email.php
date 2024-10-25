<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $to = "gutumendes@hotmail.com";
    $subject = "Novo contato do site";
    $body = "Nome: $name\n";
    $body .= "E-mail: $email\n";
    $body .= "Telefone: $phone\n";
    $body .= "Mensagem:\n$message\n";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: success.html");
        exit();
    } else {
        header("Location: error.html");
        exit();
    }
} else {
    echo "Método de requisição inválido.";
}
?>
