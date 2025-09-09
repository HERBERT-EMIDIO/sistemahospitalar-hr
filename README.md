# 🏥 HR Intranet
### Sistema de Gestão Interna do Hospital da Restauração

[![Static Badge](https://img.shields.io/badge/PHP-7.4%2B-blue?logo=php)](https://www.php.net/)
[![Static Badge](https://img.shields.io/badge/MySQL-green?logo=mysql)](https://www.mysql.com/)
[![Static Badge](https://img.shields.io/badge/Bootstrap-5-purple?logo=bootstrap)](https://getbootstrap.com/)

---

## 📋 Sobre o Projeto

A **HR Intranet** é um sistema de gestão interna desenvolvido para o Hospital da Restauração. O objetivo é fornecer uma plataforma centralizada para diversas funcionalidades administrativas e operacionais, como cadastro de prestadores, gestão de usuários, e um canal de comunicação para registro de denúncias.

Este projeto foi construído do zero, seguindo as melhores práticas de organização de código e arquitetura MVC (Model-View-Controller) para garantir escalabilidade e fácil manutenção.

## 🚀 Funcionalidades Atuais

* **Página Inicial (Dashboard):** Visão geral das informações da intranet.
* **Gestão de Prestadores:** Módulos para cadastro e listagem de prestadores de serviço.
* **Gestão de Usuários:** Controle de acesso e permissões.
* **Módulo de Denúncias:** Canal de registro para denúncias internas, permitindo o envio anônimo.

## 💻 Tecnologias Utilizadas

* **Backend:** PHP
* **Frontend:** HTML5, CSS3, JavaScript
* **Frameworks/Bibliotecas:** Bootstrap 5
* **Banco de Dados:** MySQL/MariaDB
* **Servidor:** XAMPP (Apache)

---
Ótima ideia. Incluir a estrutura de pastas no README.md é uma prática excelente para documentação e para ajudar outros desenvolvedores a entenderem o projeto de forma rápida.

Aqui está o README.md completo, incluindo a seção de estrutura do projeto que você pode copiar e colar. A formatação utiliza a sintaxe de listas e code blocks do Markdown para manter a organização visual da sua estrutura de pastas.

Modelo de README.md Atualizado
Markdown

# 🏥 HR Intranet
### Sistema de Gestão Interna do Hospital da Restauração

[![Static Badge](https://img.shields.io/badge/PHP-7.4%2B-blue?logo=php)](https://www.php.net/)
[![Static Badge](https://img.shields.io/badge/MySQL-green?logo=mysql)](https://www.mysql.com/)
[![Static Badge](https://img.shields.io/badge/Bootstrap-5-purple?logo=bootstrap)](https://getbootstrap.com/)

---

## 📋 Sobre o Projeto

A **HR Intranet** é um sistema de gestão interna desenvolvido para o Hospital da Restauração. O objetivo é fornecer uma plataforma centralizada para diversas funcionalidades administrativas e operacionais, como cadastro de prestadores, gestão de usuários, e um canal de comunicação para registro de denúncias.

Este projeto foi construído do zero, seguindo as melhores práticas de organização de código e arquitetura MVC (Model-View-Controller) para garantir escalabilidade e fácil manutenção.

## 🚀 Funcionalidades Atuais

* **Página Inicial (Dashboard):** Visão geral das informações da intranet.
* **Gestão de Prestadores:** Módulos para cadastro e listagem de prestadores de serviço.
* **Gestão de Usuários:** Controle de acesso e permissões.
* **Módulo de Denúncias:** Canal de registro para denúncias internas, permitindo o envio anônimo.

## 💻 Tecnologias Utilizadas

* **Backend:** PHP
* **Frontend:** HTML5, CSS3, JavaScript
* **Frameworks/Bibliotecas:** Bootstrap 5
* **Banco de Dados:** MySQL/MariaDB
* **Servidor:** XAMPP (Apache)

---

## 📁 Estrutura do Projeto

O projeto segue uma estrutura organizada baseada no padrão MVC.

/hr_intranet/
├── public/                     # Pasta pública, acessível pelo navegador
│   ├── index.php             # A página inicial da intranet
│   ├── dashboard.php         # Página do dashboard
│   ├── prestadores.php       # Página de prestadores
│   ├── usuarios.php          # Página de usuários
│   ├── denuncias.php         # Página de denúncias
│   └── assets/               # Pasta para arquivos estáticos
│       ├── css/
│       │   ├── bootstrap.min.css
│       │   └── style.css     # Estilos personalizados
│       ├── js/
│       │   ├── bootstrap.bundle.min.js
│       │   └── script.js     # Seus scripts JS
│       └── img/
│           └── logo.png
│
├── core/                       # Núcleo da aplicação
│   ├── Database.php          # Classe ou função de conexão com o banco
│   ├── Auth.php              # Lógica de autenticação e permissões
│   └── Router.php            # (Opcional) Para gerenciar rotas
│
├── controllers/                # Lógica de controle e manipulação de dados
│   ├── PrestadorController.php
│   ├── UsuarioController.php
│   └── DenunciaController.php
│
├── models/                     # Representação das tabelas do banco de dados
│   ├── Prestador.php
│   ├── Usuario.php
│   └── Denuncia.php
│
├── views/                      # Arquivos de visualização (HTML com PHP)
│   ├── prestadores/
│   │   ├── list.php
│   │   └── form.php
│   ├── usuarios/
│   │   ├── list.php
│   │   └── form.php
│   └── partials/               # Partes de visualização que se repetem
│       ├── header.php          # O cabeçalho e o menu de navegação
│       └── footer.php          # O rodapé
│
└── .env                        # Variável de ambiente



## 📁 Estrutura do Projeto

O projeto segue uma estrutura organizada baseada no padrão MVC.
