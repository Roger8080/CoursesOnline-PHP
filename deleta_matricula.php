<?php


include 'db.php';

$id_alunos_cursos = $_GET['id_alunos_cursos'];

$query = "DELETE FROM alunos_cursos WHERE id_alunos_cursos = $id_alunos_cursos";

mysqli_query($conexao, $query);

header('location:index.php?pagina=matriculas');