<?php

include 'db.php';

$id_aluno = $_POST['id_aluno'];
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cpf = $_POST['cpf'];


$query = "UPDATE ALUNOS SET nome = '$nome',
                            data_nascimento = '$data_nascimento',
							endereco = '$endereco', 
							cidade = '$cidade', 
							estado = '$estado', 
							cpf = '$cpf' 
          WHERE id_aluno = $id_aluno";

mysqli_query($conexao, $query);

/* print($query);  variable test */
header('location:index.php?pagina=alunos'); 

