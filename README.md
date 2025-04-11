# 💜 Meu App de Bem-Estar

Este é um projeto simples e educativo que simula um mini app de bem-estar com duas funcionalidades principais:

- 🌈 Registro de Humor  
- 📋 Adição e Remoção de Hábitos do Dia

Foi desenvolvido para praticar conceitos de **AJAX com fetch**, manipulação da **DOM**, resposta do **servidor em JSON** e integração com **PHP** — tudo de forma leve e divertida!

---

## 🚀 Funcionalidades

### 1. 🌈 Registro de Humor

Um botão que, ao ser clicado, faz uma requisição `fetch()` para o backend (`humor.php`).  
O servidor responde com um humor aleatório em JSON, que aparece na tela e também no console.

**Exemplo de retorno:**

```json
{ "humor": "Feliz" }
```

---

## 🧱 Estrutura do Projeto

```
meu-app/
├── index.php       # Página principal (HTML com PHP)
├── humor.php       # Gera e retorna um humor aleatório (JSON)
├── habito.php      # Gera e retorna um hábito aleatório (JSON)
├── script.js       # JavaScript com fetch e manipulação da DOM
└── style.css       # Estilo da interface
```

---

## 🛠️ Tecnologias Usadas

- **PHP** – Backend simples que retorna dados em JSON
- **HTML + CSS** – Estrutura e estilo da interface
- **JavaScript** – Uso da API `fetch()` para requisições assíncronas
- **JSON** – Formato de troca de dados entre frontend e backend

---

## 🧪 Como Rodar o Projeto

### 📦 Usando XAMPP ou Laragon (Windows)

1. Copie a pasta `meu-app` para:
   - `C:\xampp\htdocs\meu-app` (XAMPP)
   - `C:\laragon\www\meu-app` (Laragon)

2. Inicie o **Apache**

3. Acesse no navegador:
   ```
   http://localhost/meu-app/index.php
   ```

---

### 💻 Usando PHP embutido no terminal (qualquer SO)

Se você tem PHP instalado no terminal:

```bash
cd caminho/para/meu-app
php -S localhost:8000
```

Depois, acesse:

```
http://localhost:8000
```

---

## ✨ Possíveis Melhorias Futuras

- Salvar registros de humor e hábitos em um arquivo `.json` ou banco de dados
- Exibir um **histórico** de humor
- Criar gráficos (com Chart.js, por exemplo)
- Permitir que o usuário **adicione seus próprios hábitos**
- Adicionar campos de nome/usuário
- Layout responsivo para dispositivos móveis

---

## 👩‍💻 Autora

**Yasmin Gonçalves**  
Desenvolvedora Frontend & UX Designer. Estudante de Engenharia da Computação. 
Apaixonada por projetos com propósito e tecnologia acessível.

---

## 📚 Licença

Este projeto tem fins educacionais e está livre para estudo, adaptação e experimentação ✨
```
