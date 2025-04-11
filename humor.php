<?php
$humores = ["Feliz", "Triste", "Ansioso", "Animado", "Cansado", "Calmo", "Estressado"];
$resposta = [
  "humor" => $humores[array_rand($humores)]
];
header('Content-Type: application/json');
echo json_encode($resposta);
?>
