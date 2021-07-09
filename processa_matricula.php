<?php

include 'db.php';

$escolha_curso = $_POST['escolha_curso'];
$escolha_aluno = $_POST['escolha_aluno'];


$query = "INSERT INTO alunos_cursos(id_curso,id_aluno) 
values ('$escolha_curso','$escolha_aluno')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=matriculas');



