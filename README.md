PT/EN

# Projeto Formulário de Contato em PHP

Este projeto é um formulário de contato simples feito em PHP puro que envia e-mails usando a biblioteca PHPMailer.

## Funcionalidades

- Formulário com os campos: Nome, Email, Assunto e Mensagem.
- Validação básica no front-end e back-end.
- Envio de e-mail usando PHPMailer.
- Estrutura simples de pastas para fácil entendimento.

## Como usar

1. Clone este repositório.
2. Configure o servidor web para apontar para a pasta `formulario_contato`.
3. Configure as credenciais SMTP no arquivo `send_email.php`.
4. Acesse o formulário via navegador e envie uma mensagem.

## Estrutura do projeto

- `index.php` - Formulário de contato.
- `send_email.php` - Script PHP que processa o formulário e envia o e-mail.
- `PHPMailer/` - Biblioteca PHPMailer incluída.
- `README.md` - Este arquivo.

## Configuração SMTP

No arquivo `send_email.php`, configure as variáveis SMTP com os dados do seu servidor de e-mail para que o envio funcione corretamente.

## Requisitos

- PHP 7.0 ou superior.
- Servidor web com suporte a PHP.
- Acesso à internet para enviar e-mails via SMTP.
- -----------------------------------------------------------------------------------------------------------------------------------------------

Contact Form Project in PHP

This project is a simple contact form built with pure PHP that sends emails using the PHPMailer library.

Features

    Form with the following fields: Name, Email, Subject, and Message.

    Basic front-end and back-end validation.

    Email sending using PHPMailer.

    Simple folder structure for easy understanding.

How to Use

    Clone this repository.

    Configure your web server to point to the formulario_contato folder.

    Set up the SMTP credentials in the send_email.php file.

    Access the form via your browser and send a message.

Project Structure

    index.php - The contact form.

    send_email.php - The PHP script that processes the form and sends the email.

    PHPMailer/ - Included PHPMailer library.

    README.md - This file.

SMTP Configuration

In the send_email.php file, configure the SMTP variables with your email server details for the email sending to work correctly.

Requirements

    PHP 7.0 or higher.

    Web server with PHP support.

    Internet access to send emails via SMTP.


