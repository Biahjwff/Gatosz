# 🐱 Gatosz - Pet Shop & Agendamentos

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)

> Sistema web especializado para agendamento de serviços de estética felina e gerenciamento de estoque.

## 📖 Sobre o Projeto

O **Gatosz** é uma aplicação web desenvolvida para facilitar a gestão de um Pet Shop focado exclusivamente em gatos. O sistema permite que administradores gerenciem produtos, serviços e agendamentos, enquanto oferece aos clientes uma plataforma simples para solicitar serviços como banho, tosa e avaliações de saúde.

O projeto conta com um sistema de **múltipla autenticação** (Administrador e Cliente), garantindo segurança e interfaces personalizadas para cada tipo de usuário.

---

## 🚀 Tecnologias Utilizadas

O projeto foi desenvolvido utilizando as seguintes tecnologias e bibliotecas:

* **Back-end:** [Laravel](https://laravel.com/) (Framework PHP).
* **Banco de Dados:** MySQL.
* **Front-end:** Blade Templates, HTML5.
* **Estilização:** [Tailwind CSS](https://tailwindcss.com/) (Framework CSS utilitário).
* **Interatividade:** JavaScript (Vanilla).
* **Bibliotecas Visuais:**
    * [AOS](https://michalsnik.github.io/aos/) (Animate On Scroll) - Para animações de entrada.
    * [FontAwesome](https://fontawesome.com/) - Para ícones vetoriais.

---

## ⚙️ Funcionalidades

### 👤 Área do Cliente
* **Cadastro e Login:** Autenticação segura com guard personalizado.
* **Solicitação de Agendamento:** O cliente escolhe o serviço, data/hora e informa dados do gato (Nome, Raça, Porte, Alergias).
* **Meus Agendamentos:** Visualização do histórico e status das solicitações (Pendente, Aceito ou Recusado).

### 🛡️ Área do Administrador (Painel)
* **Gestão de Produtos (Estoque):** CRUD completo de produtos (Adicionar, Editar, Excluir).
* **Gestão de Serviços:** Cadastro de serviços com vínculo de **N:N** (Muitos para Muitos) com produtos utilizados.
* **Controle de Agendamentos:** Visualização de solicitações em tempo real com ações de **Aceitar** ou **Recusar**.
* **Dashboard:** Visão geral das funcionalidades.

---

## 🎨 Layout e Design

O design foi pensado para transmitir acolhimento e sofisticação, utilizando uma paleta de cores personalizada:
* 🌸 **Rosa Claro/Escuro:** Identidade visual principal.
* 🟤 **Marrom:** Textos e contrastes.
* 🟡 **Bege:** Fundos e áreas de destaque.

O layout é **responsivo**, adaptando tabelas e formulários para dispositivos móveis.

---

## 🔧 Como rodar o projeto localmente

Pré-requisitos: PHP, Composer, Node.js e MySQL instalados.

1.  **Clone o repositório:**
    ```bash
    git clone [https://github.com/seu-usuario/gatosz.git](https://github.com/seu-usuario/gatosz.git)
    cd gatosz
    ```

2.  **Instale as dependências do PHP:**
    ```bash
    composer install
    ```

3.  **Instale as dependências do Front-end:**
    ```bash
    npm install
    ```

4.  **Configure o ambiente:**
    * Duplique o arquivo `.env.example` e renomeie para `.env`.
    * Configure as credenciais do seu banco de dados MySQL no arquivo `.env`.

5.  **Gere a chave da aplicação:**
    ```bash
    php artisan key:generate
    ```

6.  **Rode as migrações (Criação das tabelas):**
    ```bash
    php artisan migrate
    ```

7.  **Inicie o servidor:**
    ```bash
    # Em um terminal:
    npm run dev
    
    # Em outro terminal:
    php artisan serve
    ```

8.  Acesse `http://127.0.0.1:8000` no seu navegador.

---

## 👩‍💻 Autoras

Projeto desenvolvido por:

* **Ana B. Kraemer**
* **Bianca J. Wolff**

---

## 📝 Licença

Este projeto é destinado a fins acadêmicos/portfólio.
