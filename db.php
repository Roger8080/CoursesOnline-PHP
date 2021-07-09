<?php

$server = "127.0.0.1";
$usuario = "root";
$senha = "";
$database = "aluno_cursos";

$conexao = mysqli_connect($server, $usuario, $senha, $database);


$query = "select * from cursos";
$consulta_cursos = mysqli_query($conexao,$query);

$query = "select * from alunos";
$consulta_alunos = mysqli_query($conexao,$query);

$query = "select alunos.nome,  
				 cursos.nome_curso,
				 alunos_cursos.id_alunos_cursos
FROM alunos, cursos, alunos_cursos
WHERE alunos_cursos.id_aluno = alunos.id_aluno
AND alunos_cursos.id_curso = cursos.id_curso";
$consulta_matriculas = mysqli_query($conexao,$query);

$query = "SELECT alunos.nome, 
	      cursos.nome_curso,
          nota.vlr_nota
FROM alunos, cursos, nota, alunos_cursos
WHERE alunos_cursos.id_aluno = alunos.id_aluno
AND alunos_cursos.id_curso = cursos.id_curso
AND alunos_cursos.id_alunos_cursos = nota.id_aluno_cursos";	
$consulta_notas = mysqli_query($conexao,$query);


/*



SELECT alunos.nome,
                 cursos.nome_curso,
	             nota.vlr_nota
	FROM alunos_cursos
	INNER JOIN alunos ON alunos.id_aluno = alunos_cursos.id_aluno
	INNER JOIN cursos ON cursos.id_curso = alunos_cursos.id_curso 
	INNER JOIN nota ON nota.id_aluno_cursos = alunos_cursos.id_alunos_cursos";	


"SELECT alunos.nome,
       cursos.nome_curso,
	   nota.vlr_nota
	FROM alunos, cursos, nota, alunos_cursos
	WHERE alunos_cursos.id_aluno = alunos.id_aluno
	AND   aluno_cursos.id_curso = cursos.id_curso"; 
	

"SELECT alunos.nome, 
        cursos.nome_curso
			FROM alunos, cursos, alunos_cursos
			WHERE alunos_cursos.id_aluno = alunos.id_aluno
			AND alunos_cursos.id_curso = cursos.id_curso";		
	
		
*/


/*$query = "SELECT nota.id_aluno_cursos, 
			alunos_cursos.id_aluno, 
			alunos.nome, cursos.nome
		FROM alunos, cursos, alunos_cursos, nota
		WHERE nota.id_aluno_cursos = alunos_cursos.id_alunos_cursos
		AND alunos_cursos.id_aluno = alunos.id_aluno"; */
		
		
		