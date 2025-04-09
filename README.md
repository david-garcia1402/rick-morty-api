# ✅ Projeto: Rick and Morty Explorer 🔍🧪

Este projeto é uma aplicação Laravel que consome a [API pública do Rick and Morty](https://rickandmortyapi.com/) para listar personagens, pesquisar por nome e exibir detalhes de forma dinâmica e estilosa.

---

## 🚀 Funcionalidades

- 🔍 Pesquisa de personagens por nome
- 📄 Listagem paginada de personagens
- 📌 Página de detalhes de cada personagem
- ⚙️ Integração com a API externa via HTTP Client
- 💅 Interface estilizada com Bootstrap

---

## 🧰 Tecnologias Utilizadas

- **Laravel** 10.x
- **PHP** 8.x
- **Bootstrap 5**
- **Vite** (frontend moderno)
- **Rick and Morty API** (REST pública)

---

## 🖼️ Preview

> Interface limpa, objetiva e responsiva para explorar o universo de Rick and Morty com uma busca eficiente!
![image](https://github.com/user-attachments/assets/7abe0917-227b-48fb-bd52-d63c748f402a)

![image](https://github.com/user-attachments/assets/706b4e12-1fb6-4c0c-a788-f365b08063ed)


---

## ⚙️ Como rodar o projeto localmente

### 1. Clone o repositório:

```bash
git clone https://github.com/seu-usuario/rick-morty-api.git
cd rick-morty-api/rick-morty-app
```

### 2. Instale as dependências:

```bash
composer install
npm install && npm run dev
```

### 3. Configure o ambiente:

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Suba o servidor local:

```bash
php artisan serve
```

## 🔎 Pesquisa
A barra de busca faz um GET para a rota /buscar?search=nome e retorna todos os personagens que batem com o termo.

Exemplo:

```bash
/buscar?search=rick
```
