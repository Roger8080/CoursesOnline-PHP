<?php

include 'db.php';

$nome_aluno = $_POST['nome_aluno'];
$data_nascimento_aluno = $_POST['data_nascimento_aluno'];
$endereco_aluno = $_POST['endereco_aluno'];
$cidade_aluno = $_POST['cidade_aluno'];
$estado_aluno = $_POST['estado_aluno'];
$cpf_aluno = $_POST['cpf_aluno'];

$query = "INSERT INTO alunos(nome,data_nascimento,endereco,cidade,estado,cpf) values 
('$nome_aluno','$data_nascimento_aluno','$endereco_aluno','$cidade_aluno','$estado_aluno','$cpf_aluno')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=alunos');





