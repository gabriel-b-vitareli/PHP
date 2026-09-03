<?php 
require_once 'connect_postgres.php';

$id = 1;

$sql = "SELECT nome,turma FROM alunos WHERE id = :id";

$stmt = $conexao->prepare($sql);
$stmt->bindParam(":id", $id);
$stmt->execute();

$aluno = $stmt->fetch(PDO::FETCH_ASSOC);

echo "<hr>Aluno: {$aluno['nome']}<br>Turma: {$aluno['turma']}";
?>