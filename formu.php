<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário para WhatsApp</title>
    <style>
        body {
            background-color: #1a0033;
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: linear-gradient(145deg, #29004d, #3e0066);
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0px 0px 20px #9b00ff;
            width: 350px;
            text-align: center;
        }
        label {
            color: #d48cff;
            font-size: 14px;
            display: block;
            margin-top: 10px;
            text-align: left;
            font-weight: bold;
        }
        input {
            width: 90%;
            padding: 12px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 2px solid #9b00ff;
            border-radius: 8px;
            background-color: #2d004d;
            color: #d48cff;
            outline: none;
            font-size: 16px;
            transition: 0.3s;
        }
        input:focus {
            border-color: #d48cff;
            box-shadow: 0px 0px 8px #d48cff;
        }
        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: linear-gradient(90deg, #9b00ff, #d48cff);
            color: white;
            font-size: 18px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }
        button:hover {
            background: linear-gradient(90deg, #7a00cc, #b066ff);
            box-shadow: 0px 0px 10px #d48cff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 style="color: #d48cff;">Fale Conosco</h2>
        <form id="whatsappForm">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" placeholder="Digite seu nome" required>
            
            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" placeholder="Digite seu telefone" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" placeholder="Digite seu email" required>
            
            <button type="button" onclick="enviarWhatsApp()">Enviar para WhatsApp</button>
        </form>
    </div>

    <script>
        function enviarWhatsApp() {
            var nome = document.getElementById('nome').value;
            var telefone = document.getElementById('telefone').value;
            var email = document.getElementById('email').value;
            
            var mensagem = `Olá, meu nome é ${nome}. Meu telefone é ${telefone} e meu email é ${email}.`;
            var numeroWhatsApp = '5599999999999'; // Substitua pelo número correto com DDD
            var url = `https://wa.me/${numeroWhatsApp}?text=${encodeURIComponent(mensagem)}`;
            
            window.open(url, '_blank');
        }
    </script>
</body>
</html>
