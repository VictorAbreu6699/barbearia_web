# 📌 Barbearia_web

## 📖 Sobre o Projeto
Este projeto é uma aplicação **full stack** dividida em duas partes principais:

- **Frontend (Vue.js + Vite)**: responsável pela interface com o usuário, garantindo uma experiência interativa e responsiva.
- **Backend (Laravel - PHP)**: responsável pela lógica de negócio, autenticação e comunicação com o banco de dados.

O objetivo é fornecer uma arquitetura moderna, separando bem as responsabilidades entre frontend e backend para facilitar a manutenção e escalabilidade.
Está sendo desenvolvida sem objetivos comerciais, momentaneamente será somente para estudo e desenvolvimento de portfolio

---

## 🚀 Como Rodar o Projeto

### 🔹 Pré-requisitos
Antes de rodar o projeto, instale em sua máquina:
- [Node.js](https://nodejs.org/) (versão LTS recomendada)
- [NPM](https://www.npmjs.com/) (vem junto com o Node.js)
- [PHP](https://www.php.net/) (>= 8.x)
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/) ou outro banco de dados compatível

---

## 🖥️ Frontend (Vue.js + Vite)

1. Acesse a pasta do frontend:
   ```bash
   cd frontend
   ```

2. Instale as dependências:
   ```bash
   npm install
   ```

3. Crie o arquivo `.env` na raiz da pasta `frontend` com o seguinte conteúdo:
   ```env
   VITE_API_URL=http://localhost:8000/api
   ```

   > Aqui você define a URL do backend que o frontend vai consumir.  
   > No caso acima, o backend Laravel estará rodando em `http://localhost:8000`.

4. Inicie o servidor de desenvolvimento:
   ```bash
   npm run dev
   ```

5. O frontend estará disponível em:
   ```
   http://localhost:5173
   ```

---

## ⚙️ Backend (Laravel)

1. Acesse a pasta do backend:
   ```bash
   cd backend
   ```

2. Instale as dependências:
   ```bash
   composer install
   ```

3. Crie o arquivo `.env` na raiz da pasta `backend` com o seguinte conteúdo (ajuste os valores conforme seu banco de dados):
   ```env
   APP_NAME=Laravel
   APP_ENV=local
   APP_KEY=
   APP_DEBUG=true
   APP_URL=http://localhost:8000

   LOG_CHANNEL=stack
   LOG_LEVEL=debug

   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nome_do_banco
   DB_USERNAME=usuario
   DB_PASSWORD=senha
   ```

   > Aqui você configura o ambiente do Laravel e o acesso ao banco de dados.

4. Gere a chave da aplicação:
   ```bash
   php artisan key:generate
   ```

5. Rode as migrations para criar as tabelas:
   ```bash
   php artisan migrate
   ```

6. Inicie o servidor Laravel:
   ```bash
   php artisan serve
   ```

7. O backend estará disponível em:
   ```
   http://localhost:8000
   ```

---

## 🔗 Integração Frontend + Backend
- O **frontend** consome as rotas do **backend** configuradas no `VITE_API_URL`.  
- Exemplo prático:
  - Backend rodando em `http://localhost:8000/api`
  - Arquivo `.env` do frontend configurado assim:
    ```env
    VITE_API_URL=http://localhost:8000/api
    ```

Assim, quando o frontend fizer uma requisição via `axios` ou `fetch`, ela será enviada para o backend Laravel.

---

## 📌 Tecnologias Utilizadas
- **Frontend**: Vue.js 3, Vite, Axios  
- **Backend**: Laravel 10, PHP 8.x, MySQL  
- **Outros**: Composer, Node.js, NPM  

---

## 👨‍💻 Como Contribuir
1. Faça um fork do repositório  
2. Crie uma branch para sua feature:
   ```bash
   git checkout -b feature/minha-feature
   ```
3. Realize seus commits:
   ```bash
   git commit -m "Adicionei minha feature"
   ```
4. Envie para o repositório remoto:
   ```bash
   git push origin feature/minha-feature
   ```
5. Abra um Pull Request 🎉
