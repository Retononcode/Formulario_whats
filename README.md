# Documentação do Formulário para WhatsApp

## Introdução
Este documento descreve a estrutura, funcionamento e personalização do formulário estilizado em tons de roxo, que permite o envio de mensagens diretamente para o WhatsApp.

---

## Estrutura do Código
O código HTML consiste em três partes principais:
1. **Cabeçalho (`<head>`)**: Define o título da página e contém os estilos CSS para personalização.
2. **Corpo (`<body>`)**: Inclui o formulário, os campos de entrada e o botão de envio.
3. **Script JavaScript (`<script>`)**: Implementa a funcionalidade de envio da mensagem para o WhatsApp.

---

## Estilização (CSS)
O design foi criado com uma paleta de cores em tons de roxo e inclui efeitos modernos para melhorar a experiência do usuário.

### Principais Características do Estilo:
- **Plano de fundo:** Cor de fundo escura (`#1a0033`), destacando o formulário no centro da tela.
- **Container:** Gradiente roxo (`#29004d` para `#3e0066`) com sombra roxa (`#9b00ff`).
- **Campos de entrada:** Fundo escuro (`#2d004d`), bordas em roxo (`#9b00ff`) e realce ao foco (`#d48cff`).
- **Botão:** Gradiente de roxo (`#9b00ff` para `#d48cff`), animação ao passar o mouse.

---

## Campos do Formulário
O formulário contém os seguintes campos obrigatórios:

| Campo     | Tipo   | Placeholder            | Obrigatório |
|-----------|--------|------------------------|-------------|
| Nome      | Texto  | Digite seu nome        | Sim         |
| Telefone  | Tel    | Digite seu telefone    | Sim         |
| Email     | Email  | Digite seu email       | Sim         |

---

## Funcionamento do Script
O JavaScript define a função `enviarWhatsApp()`, que:
1. Obtém os valores dos campos (`nome`, `telefone`, `email`).
2. Monta a mensagem de texto com os dados inseridos.
3. Cria uma URL personalizada para abrir o WhatsApp Web/App.
4. Abre a URL em uma nova guia/janela.

### Exemplo de Mensagem Gerada
```text
Olá, meu nome é João. Meu telefone é (11) 99999-9999 e meu email é joao@email.com.
```

### Personalização do Número de WhatsApp
Para que o formulário funcione corretamente, altere a variável `numeroWhatsApp` no script:
```javascript
var numeroWhatsApp = '5599999999999'; // Substitua pelo número correto com DDD
```

---

## Melhorias e Expansões
- **Validação Avançada:** Adicionar validações para garantir que o telefone e o e-mail sejam inseridos corretamente.
- **Estilo Responsivo:** Melhorar a responsividade para dispositivos móveis.
- **Campos Adicionais:** Incluir novos campos para informações extras, como assunto e mensagem personalizada.

---

## Conclusão
Este formulário é uma solução prática para facilitar a comunicação via WhatsApp, com um design moderno e funcionalidade simples de personalizar. Qualquer melhoria pode ser feita facilmente editando os estilos CSS e o script JavaScript.

---

Caso tenha dúvidas ou precise de personalizações adicionais, entre em contato! retononcode@gmail.com

