<?php

#Database
include 'db.php';

#Body
include 'header.php';

#Page
if(isset($_GET['pagina'])){
	$pagina = $_GET['pagina'];
}
else{
	$pagina = 'home';
}

switch($pagina){
	case 'cursos': include 'views/cursos.php'; break;
	case 'inserir_curso': include 'views/inserir_curso.php'; break;
	case 'alunos': include 'views/alunos.php'; break;
	case 'inserir_aluno': include 'views/inserir_aluno.php'; break;
	case 'matriculas': include 'views/matriculas.php'; break;
	case 'inserir_matricula': include 'views/inserir_matricula.php'; break;
	case 'notas': include 'views/notas.php'; break;
	default: include 'views/home.php'; break;
}



#Rodapé
include 'footer.php';

echo "";






/*

if($pagina == 'cursos'){
	include 'views/cursos.php';
}
elseif($pagina == 'inserir_curso'){
	include 'views/inserir_curso.php';
}
elseif($pagina == 'inserir_aluno'){
	include 'views/inserir_aluno.php';
}
elseif($pagina == 'alunos'){
	include 'views/alunos.php';
}
elseif($pagina == 'matriculas'){
	include 'views/matriculas.php';
}
elseif($pagina == 'inserir_matricula'){
	include 'views/inserir_matricula.php';
}
elseif($pagina == 'notas'){
	include 'views/notas.php';
}
else{
	include 'views/home.php';
}

';

*/

