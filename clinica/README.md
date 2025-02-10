# Sistema de Gerenciamento de Clínica Médica

## 📌 Sobre o Projeto
Este é um sistema de gerenciamento de clínica médica desenvolvido para fins acadêmicos. Ele permite o cadastro, login e gerenciamento de médicos e pacientes, além de um painel administrativo.

## 🚀 Tecnologias Utilizadas

- **Frontend:** HTML, CSS, JavaScript, Bootstrap
- **Backend:** PHP (padrão MVC)
- **Banco de Dados:** MySQL
- **Servidor Local:** XAMPP

## 📂 Estrutura de Diretórios
```
/clinica
│── /backend          # Código do servidor PHP
│   ├── /config       # Configurações do banco de dados
│   ├── /controllers  # Controladores do sistema
│   ├── /models       # Modelos do banco de dados
│   ├── /views        # Arquivos para renderização
│── /database         # Scripts SQL para criação do banco
│── /frontend         # Interface do usuário
│   ├── /css         # Estilos
│   ├── /js          # Scripts
│   ├── /pages       # Páginas do sistema
│── .htaccess        # Configuração de URLs amigáveis
│── README.md        # Documentação do projeto
```

## 🛠️ Como Configurar o Projeto
### 1️⃣ Instalar XAMPP
Baixe e instale o [XAMPP](https://www.apachefriends.org/pt_br/index.html). Certifique-se de ativar **Apache** e **MySQL**.

### 2️⃣ Configurar o Banco de Dados
1. Abra o **phpMyAdmin** através do navegador: `http://localhost/phpmyadmin`
2. Crie um novo banco de dados chamado `clinica_db`
3. Importe o arquivo SQL localizado em `/database/create_database.sql`

### 3️⃣ Executar o Sistema
1. Copie a pasta `clinica` para o diretório `htdocs` do XAMPP (`C:/xampp/htdocs/clinica`)
2. Inicie o Apache e o MySQL no painel do XAMPP
3. Acesse no navegador: `http://localhost/clinica/frontend/index.html`

## 🔑 Credenciais de Acesso (Admin)
- **Email:** admin@clinica.com
- **Senha:** admin123

---
© 2025 Sistema da Clínica Médica. Todos os direitos reservados.
