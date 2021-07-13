<!DOCTYPE html>
<html>
<head>
	<title>CURSO PHP</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" 
	integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<body>
	<header>
		<div class ="container">
			<a href="?pagina=home"><img src="logo.png" title="Logo" alt="Logo"></a>
			<div id="menu">
				    <a href="?pagina=alunos">Alunos</a>
					<a href="?pagina=cursos">Cursos</a>
					<a href="?pagina=matriculas">Matriculas</a>	
					<a href="?pagina=notas">Notas</a>	
					<?php if(isset($_SESSION['login'])){ ?>
    				<a href="logout.php">
   					   <?php echo $_SESSION['usuario']; ?>
					   (sair)
				    </a>
				<?php } ?>					
		    </div>
        </div>			
	</header>
<div id="conteudo" class="container">
	

	