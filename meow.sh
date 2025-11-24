#!/bin/bash

# --- 1. CONFIGURAÇÃO INICIAL E PAUSA ---
echo "⚙️ Iniciando configuração do projeto Laravel..."

# Instala as dependências PHP (pasta vendor)
echo "📦 Instalando dependências PHP (composer install)..."
composer install
echo "✅ Dependências PHP instaladas na pasta vendor."
echo ""

# Copia o arquivo de exemplo para criar o .env
if [ ! -f ".env" ]; then
    cp .env.example .env
    echo "✅ Arquivo .env criado a partir de .env.example."
else
    echo "⚠️ Arquivo .env já existe. Pulando a cópia."
fi

# Gera a chave de segurança da aplicação
php artisan key:generate --ansi
echo "🔑 Chave de aplicação (APP_KEY) gerada."

echo ""
echo "================================================================"
echo "      PAUSA: Por favor, edite o arquivo .env agora!"
echo "      Configure as credenciais do banco de dados (DB_*)."
echo "================================================================"
echo ""

# Pausa, esperando o usuário pressionar Enter para continuar
read -p "Pressione [ENTER] após configurar e salvar o arquivo .env..."

# --- 2. CONTINUAÇÃO DA INSTALAÇÃO ---
echo ""
echo "🚀 Continuando a instalação..."

# Instala as dependências do front-end (se aplicável)
if [ -f "package.json" ]; then
    echo "📦 Instalando dependências Node.js..."
    npm install
    echo "🔨 Compilando assets (vite)..."
    npm run dev
    echo "✅ Dependências Node.js instaladas e assets compilados."
else
    echo "➡️ Arquivo package.json não encontrado. Pulando a instalação Node.js."
fi

# Roda as migrações do banco de dados
echo "💾 Rodando as migrações do banco de dados..."
php artisan migrate
echo "✅ Migrações concluídas."

echo ""
echo "🎉 CONFIGURAÇÃO BÁSICA CONCLUÍDA!"
echo "Para iniciar o servidor, execute: php artisan serve"
echo ""
