<?php 
require_once 'connect_postgres.php';

$sql = "UPDATE alunos SET nome = :nome WHERE id = :id";

$stmt = $conexao->prepare($sql);
$stmt->bindValue(":nome", "Gabriel Braga");
$stmt->bindValue(":id", 1);
$stmt->execute();

echo "Nome alterado com sucesso.";
?>