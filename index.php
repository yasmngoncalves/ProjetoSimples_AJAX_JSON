<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Meu App de Bem-Estar</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Meu App de Bem-Estar ✨</h1>

  <!-- Registro de Humor -->
  <div class="box">
    <h2>🌈 Registro de Humor</h2>
    <button onclick="registrarHumor()">Como estou me sentindo?</button>
    <p id="humor-resultado"></p>
  </div>

  <!-- Hábitos -->
  <div class="box">
    <h2>📋 Hábitos do Dia</h2>
    <button onclick="adicionarHabito()">+</button>
    <button onclick="removerHabito()">−</button>
    <ul id="lista-habitos"></ul>
  </div>

  <script src="script.js"></script>
</body>
</html>
