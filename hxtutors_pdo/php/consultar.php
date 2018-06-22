<?php

require_once 'connection.php';

// tipo de consulta, sem tratamento, realizada como a função mysql (em desuso)
// $usuarios = $pdo->query("SELECT * FROM pessoas");
// $total_usuarios = $usuarios->rowCount();

// echo "<p>Total de usuários: $total_usuarios</p>";

// é recomendável, quando receber algum valor através do usuário, preparar a execução da instrução
$id = $_GET['id'];

$buscar_usuarios = $pdo->prepare("SELECT * FROM pessoas WHERE id=:id");
$buscar_usuarios->bindValue(':id', $id);

$buscar_usuarios->execute();
$total_usuarios = $buscar_usuarios->rowCount();

echo "<p>Total de usuários: $total_usuarios</p>";

