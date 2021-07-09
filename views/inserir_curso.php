<?php if(!isset($_GET['editar'])){ ?>

<h2>Inserir novo curso</h2>

<form method="post" action="processa_curso.php">
	<br>
	<label>Nome do curso</label><br>
	<input type="text" name="nome_curso" placeholder="Insira o nome do curso">
	<br><br>
	<input type="submit" value="Inserir curso">
</form>

		
<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_cursos)){ ?>
		<?php if($linha['id_curso'] == $_GET['editar']){ ?>
		
		 <h2>Editar Curso</h2>
		 <form method="post" action="edita_curso.php">
			<input type="hidden" name="id_curso" value="<?php
				echo $linha['id_curso']; ?>">
			<br>
			<label>Nome Curso:</label><br>
			<input type="text" name="nome_curso" placeholder="insira o nome do curso"
			value="<?php echo $linha['nome_curso']; ?>">
			<br><br>
			<input type="submit" value="editar Curso">
		 </form>
		
		<?php } ?>
	<?php } ?>
<?php } ?>	
					