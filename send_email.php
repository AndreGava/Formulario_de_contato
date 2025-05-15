<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $assunto = trim($_POST['assunto'] ?? '');
    $mensagem = trim($_POST['mensagem'] ?? '');

    $errors = [];

    if (empty($nome)) {
        $errors[] = "O nome é obrigatório.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Um email válido é obrigatório.";
    }
    if (empty($assunto)) {
        $errors[] = "O assunto é obrigatório.";
    }
    if (empty($mensagem)) {
        $errors[] = "A mensagem é obrigatória.";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
        echo "<p><a href='index.php'>Voltar ao formulário</a></p>";
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // Configurações do servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.exemplo.com'; // Substitua pelo seu servidor SMTP
        $mail->SMTPAuth = true;
        $mail->Username = 'seu-email@exemplo.com'; // Seu usuário SMTP
        $mail->Password = 'sua-senha'; // Sua senha SMTP
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Remetente e destinatário
        $mail->setFrom($email, $nome);
        $mail->addAddress('destinatario@exemplo.com', 'Destinatário'); // Substitua pelo destinatário

        // Conteúdo do e-mail
        $mail->isHTML(true);
        $mail->Subject = $assunto;
        $mail->Body    = nl2br(htmlspecialchars($mensagem));
        $mail->AltBody = $mensagem;

        $mail->send();
        echo "<p style='color:green;'>Mensagem enviada com sucesso!</p>";
        echo "<p><a href='index.php'>Voltar ao formulário</a></p>";
    } catch (Exception $e) {
        echo "<p style='color:red;'>Erro ao enviar mensagem: {$mail->ErrorInfo}</p>";
        echo "<p><a href='index.php'>Voltar ao formulário</a></p>";
    }
} else {
    header("Location: index.php");
    exit;
}
?>
