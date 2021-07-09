<?php

include 'db.php';

$id_curso = $_POST['id_curso'];
$nome_curso = $_POST['nome_curso'];

$query = "UPDATE CURSOS SET nome_curso = '$nome_curso' where id_curso = $id_curso";

mysqli_query($conexao, $query);

/* print($query); variable test */
header('location:index.php?pagina=cursos');