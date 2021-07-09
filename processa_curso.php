<?php

include 'db.php';

$nome_curso = $_POST['nome_curso']; /*$nome_curso is COLUM and 'nome_curso' is TextBox */

$query = "INSERT INTO cursos(nome_curso) values ('$nome_curso')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cursos');





