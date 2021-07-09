<h2>INSERIR NOVA MATRICULA</h2>


<form method="post" action="processa_matricula.php">
	<br>	
	
	<p>Selecione o Aluno</p>
	<select name="escolha_aluno">
		<option>Selecione um aluno</option>
		<?php
		while($linha = mysqli_fetch_array($consulta_alunos)){
			echo '<option value="'.$linha['id_aluno'].'">'.$linha['nome'].'</option>';
		}
		?>
    </select>	
    <br><br>	

	<p> Selecione um Curso</p>
	<select name="escolha_curso">
		<option>Selecione um Curso</option>
		<?php
		while($linha = mysqli_fetch_array($consulta_cursos)){
			echo '<option value="'.$linha['id_curso'].'">'.$linha['nome_curso'].'</option>';
		}
		?>
	</select>
	<br><br>	
	
	<input type="submit" value="Matricular aluno no curso">
</form>







