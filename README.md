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
