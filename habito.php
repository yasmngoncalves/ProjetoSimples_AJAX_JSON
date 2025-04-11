<?php
$habitos = ["Beber água", "Fazer exercício", "Meditar", "Escrever no diário", "Cuidar da pele", "Dormir cedo"];
$resposta = [
  "habito" => $habitos[array_rand($habitos)]
];
header('Content-Type: application/json');
echo json_encode($resposta);
?>
