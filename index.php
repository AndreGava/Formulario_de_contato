<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Formulário de Contato</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 2rem;
            background-color: #f4f4f4;
        }
        form {
            background: white;
            padding: 1.5rem;
            border-radius: 5px;
            max-width: 500px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-top: 1rem;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 0.5rem;
            margin-top: 0.25rem;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 1rem;
            resize: vertical;
        }
        button {
            margin-top: 1.5rem;
            padding: 0.75rem 1.5rem;
            background-color: #007bff;
            border: none;
            color: white;
            font-size: 1rem;
            border-radius: 3px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            font-size: 0.9rem;
        }
        .success {
            color: green;
            font-size: 1rem;
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <form id="contactForm" method="POST" action="send_email.php" novalidate>
        <h2>Formulário de Contato</h2>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required />
        <div class="error" id="errorNome"></div>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required />
        <div class="error" id="errorEmail"></div>

        <label for="assunto">Assunto:</label>
        <input type="text" id="assunto" name="assunto" required />
        <div class="error" id="errorAssunto"></div>

        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" rows="5" required></textarea>
        <div class="error" id="errorMensagem"></div>

        <button type="submit">Enviar</button>
        <div id="formMessage"></div>
    </form>

    <script>
        const form = document.getElementById('contactForm');
        const errorNome = document.getElementById('errorNome');
        const errorEmail = document.getElementById('errorEmail');
        const errorAssunto = document.getElementById('errorAssunto');
        const errorMensagem = document.getElementById('errorMensagem');
        const formMessage = document.getElementById('formMessage');

        form.addEventListener('submit', function(event) {
            let valid = true;
            errorNome.textContent = '';
            errorEmail.textContent = '';
            errorAssunto.textContent = '';
            errorMensagem.textContent = '';
            formMessage.textContent = '';
            formMessage.className = '';

            if (!form.nome.value.trim()) {
                errorNome.textContent = 'Por favor, informe seu nome.';
                valid = false;
            }
            if (!form.email.value.trim()) {
                errorEmail.textContent = 'Por favor, informe seu email.';
                valid = false;
            } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(form.email.value.trim())) {
                errorEmail.textContent = 'Por favor, informe um email válido.';
                valid = false;
            }
            if (!form.assunto.value.trim()) {
                errorAssunto.textContent = 'Por favor, informe o assunto.';
                valid = false;
            }
            if (!form.mensagem.value.trim()) {
                errorMensagem.textContent = 'Por favor, escreva uma mensagem.';
                valid = false;
            }

            if (!valid) {
                event.preventDefault();
            }
        });
    </script>
</body>
</html>
