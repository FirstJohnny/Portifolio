# 🐺 LoneWolf Portfolio

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![Security](https://img.shields.io/badge/Security-First-green?style=for-the-badge&logo=shield&logoColor=white)

<br>

**"Construindo Futuros Digitais Seguros"**

[Sobre](#-sobre) • [Funcionalidades](#-funcionalidades) • [Tecnologias](#-tecnologias) • [Instalação](#-instalação) • [Contato](#-contato)

</div>

---

## 🛡️ Sobre

O **LoneWolf Portfolio** é uma aplicação web desenvolvida para apresentar habilidades em **Engenharia de Software**, **DevSecOps** e **Cibersegurança**. 

Diferente de portfólios tradicionais, este projeto incorpora uma estética **Cyberpunk/Hacker**, com animações de terminal, efeitos de "matrix rain", glassmorphism e uma interface imersiva que reflete a identidade de um profissional focado em segurança ofensiva e defensiva.

## 🚀 Funcionalidades

*   **Loader Interativo:** Animação de inicialização simulando um terminal de comando e verificação de protocolos de segurança.
*   **UI/UX Temático:** Design escuro (Dark Mode) com cores neon (Verde Cyber, Azul Tech, Âmbar), efeitos de brilho e fontes monoespaçadas.
*   **Animações CSS Avançadas:**
    *   Efeito *Matrix Rain* no fundo.
    *   Efeito *Glitch* e *Typing* em textos.
    *   Cards com *Glassmorphism* (vidro fosco).
    *   Menu Mobile responsivo com animação slide-down.
*   **Seções Dinâmicas:**
    *   **Hero:** Apresentação com estatísticas e terminal interativo.
    *   **Skills:** Grid de habilidades técnicas.
    *   **Projetos:** Showcase de ferramentas de segurança e desenvolvimento.
    *   **Certificações:** Galeria de conquistas (Alura, FEBRABAN, etc.).
    *   **Contato:** Formulário estilizado e links sociais.
*   **Componentização:** Estrutura limpa utilizando **Laravel Blade Components** para modularidade.

## 💻 Tecnologias

Este projeto foi construído utilizando as melhores práticas de desenvolvimento web moderno:

### Backend & Core
*   **Laravel 10+**: Framework PHP robusto para a estrutura da aplicação.
*   **PHP 8.2+**: Linguagem base.

### Frontend
*   **Blade Templates**: Motor de renderização do Laravel.
*   **CSS3 Custom Properties**: Variáveis CSS para gerenciamento de tema (Cores, Glows, Sombras).
*   **JavaScript (Vanilla)**: Lógica para o menu mobile, loader e interações do DOM.
*   **FontAwesome**: Ícones vetoriais.
*   **Google Fonts**: *Poppins* (Textos) e *Roboto Mono* (Código/Terminal).

### Build Tools
*   **Vite**: Bundler rápido para assets.
*   **NPM**: Gerenciamento de dependências frontend.
*   **Composer**: Gerenciamento de dependências PHP.

## 🔧 Instalação

Siga os passos abaixo para rodar o projeto localmente:

### Pré-requisitos
*   PHP >= 8.1
*   Composer
*   Node.js & NPM

### Passo a Passo

1.  **Clone o repositório**
    ```bash
    git clone https://github.com/FirstJohnny/lonewolf-portfolio.git
    cd lonewolf-portfolio
    ```

2.  **Instale as dependências do PHP**
    ```bash
    composer install
    ```

3.  **Instale as dependências do Frontend**
    ```bash
    npm install
    ```

4.  **Configure o ambiente**
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5.  **Compile os assets (CSS/JS)**
    ```bash
    npm run build
    ```

6.  **Inicie o servidor**
    ```bash
    php artisan serve
    ```

Acesse o projeto em: `http://localhost:8000`

## 📂 Estrutura de Pastas Principal

```
resources/
├── css/
│   └── style.css          # Estilos globais e variáveis Cyberpunk
├── js/
│   └── app.js             # Scripts principais
└── views/
    ├── components/
    │   ├── layout/        # Header, Footer, Main Layout
    │   ├── sections/      # Hero, About, Skills, Projects, Contact
    │   └── ui/            # Efeitos visuais (Cyber Effect)
    └── welcome.blade.php  # Página inicial
```

## 📞 Contato

**LoneWolf** - *Cyber Security & Software Engineer*

*   📍 **Localização:** Luanda, Angola
*   📧 **Email:** joaonicolauremostomas@gmail.com
*   📱 **Telefone:** +244 932 905 801

---

<div align="center">
    Desenvolvido com 💙 e 🔒 por LoneWolf
</div>
