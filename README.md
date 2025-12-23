# Desafio Revvo

Este repositório contém a implementação do **Desafio Técnico Revvo**, desenvolvido como parte do processo seletivo, seguindo as orientações fornecidas pela empresa.

O objetivo do desafio é demonstrar habilidades técnicas, organização de código, capacidade de evolução incremental (commits frequentes) e boas práticas de desenvolvimento.

---

## 📌 Sobre o Projeto

Este projeto foi iniciado a partir das diretrizes oficiais do desafio, respeitando os seguintes pontos:

- Repositório criado especificamente para o desafio (`desafio_revvo`);
- Evolução contínua do código, evidenciada por commits frequentes;
- Foco nas principais habilidades técnicas do desenvolvedor;
- Organização e clareza na estrutura do projeto;
- README contendo informações do projeto e do desenvolvedor.

---

## 🛠️ Tecnologias Utilizadas

- Linguagem principal: **PHP**
- Frontend: **Javascript**
- Banco de dados: **Postgres**
- Versionamento: **Git**
- Plataforma: **GitHub**

---

## 📂 Estrutura do Projeto

```text
desafio_revvo/
├── src/
│   ├── public/                 # Ponto de entrada da aplicação
│   │   ├── index.php           # Front Controller (PHP)
│   │   └── assets/             # Arquivos estáticos
│   │       ├── css/
│   │       ├── js/
│   │       └── images/
│   │
│   ├── app/
│   │   ├── config/             # Configurações da aplicação
│   │   │   └── database.php
│   │   │
│   │   ├── controllers/        # Controllers
│   │   │   ├── CursoController.php
│   │   │   └── SlideshowController.php
│   │   │
│   │   ├── models/             # Models
│   │   │   ├── Curso.php
│   │   │   └── Slideshow.php
│   │   │
│   │   └── views/              # Views
│   │       ├── layout/
│   │       │   ├── header.php
│   │       │   └── footer.php
│   │       ├── cursos/
│   │       ├── slideshow/
│   │       └── modal.php
│   │
│   └── storage/
│       └── uploads/            # Upload de imagens
│
├── .gitignore
├── README.md
└── ...
```
