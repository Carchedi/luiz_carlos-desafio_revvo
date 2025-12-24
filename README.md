# Desafio Revvo

Este repositório contém a implementação do **Desafio Técnico Revvo**, desenvolvido como parte do processo seletivo, seguindo as orientações fornecidas pela empresa.

O objetivo do projeto é demonstrar habilidades técnicas em **back-end e front-end**, organização de código, boas práticas de desenvolvimento e evolução incremental por meio de commits frequentes.

---

## 👨‍💻 Desenvolvedor

**Nome:** Luiz Carlos Carchedi  
**GitHub:** https://github.com/carchedi  

---

## 📌 Sobre o Projeto

A aplicação consiste em um sistema simples de gerenciamento de conteúdo, contendo:

- CRUD completo de **Cursos**;
- CRUD completo de **Slideshow** (com upload de imagens);
- Exibição dinâmica do slideshow na página inicial;
- Modal exibido apenas no primeiro acesso do usuário;
- Layout responsivo baseado no layout fornecido no desafio.

---

## 🛠️ Tecnologias Utilizadas

- **PHP** (PHP puro, sem framework)
- **HTML5**
- **CSS3**
- **JavaScript (Vanilla JS)**
- **PostgreSQL**
- **Git / GitHub**

---

## ⚙️ Funcionalidades Implementadas

### Back-end
- CRUD de Cursos
- CRUD de Slideshow
- Upload de imagens
- Integração com banco de dados PostgreSQL via PDO
- Sistema de rotas manual utilizando Front Controller

### Front-end
- Página inicial com slideshow dinâmico
- Modal exibido apenas no primeiro acesso (controle via `localStorage`)
- Layout responsivo baseado no layout oficial do desafio
- JavaScript puro (sem bibliotecas externas)

---

## 🗄️ Banco de Dados

O projeto utiliza **PostgreSQL**.

### Tabelas principais
- `cursos`
- `slideshows`

As imagens do slideshow são armazenadas em:

```
src/storage/uploads
```

---

## 🚀 Como Executar o Projeto

### 1️⃣ Clonar o repositório
```bash
git clone https://github.com/seu_usuario/desafio_revvo.git
cd desafio_revvo
```

### 2️⃣ Configurar o banco de dados
- Criar um banco no PostgreSQL
- Ajustar as credenciais em:
```
src/app/config/database.php
```

### 3️⃣ Subir o servidor PHP
```bash
php -S localhost:8000 -t src/public
```

### 4️⃣ Acessar no navegador
```
http://localhost:8000
```

---

## 📂 Estrutura do Projeto

```text
desafio_revvo/
├── src/
│   ├── public/                 # Ponto de entrada da aplicação
│   │   ├── index.php           # Front Controller
│   │   └── assets/             # CSS, JS e imagens
│   │
│   ├── app/
│   │   ├── config/             # Configurações
│   │   ├── controllers/        # Controllers
│   │   ├── models/             # Models
│   │   └── views/              # Views
│   │
│   └── storage/
│       └── uploads/            # Upload de imagens
│
├── .gitignore
├── README.md
└── ...
```

---

## 🧪 Observações

- O modal é exibido apenas no primeiro acesso do usuário;
- O slideshow da Home é carregado dinamicamente a partir do banco de dados;
- O projeto foi desenvolvido sem frameworks, conforme permitido pelo desafio.

---

## 📬 Finalização

Após a conclusão do desafio, o link do repositório deve ser enviado para:

📧 **plataformas@somosrevvo.com.br**  
📌 Assunto: **[Desafio Revvo] – Finalizado**

---

## ✅ Status do Projeto

✔ Funcional  
✔ Requisitos principais implementados  
✔ Pronto para avaliação  
