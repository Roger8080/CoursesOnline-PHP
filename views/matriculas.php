<a href="?pagina=inserir_matricula">Inserir nova matricula</a>

<table style="border:1px solid #ccc; width: 100%">
	<thead>
		<tr>
			<th>Nome aluno</th>
			<th>Nome curso</th>	
			<th>Deletar</th>
		</tr>
	</thead>


		<?php 
			while($linha = mysqli_fetch_array($consulta_matriculas)){
				echo '<tr><td >'.$linha['nome'].'</td>';
				echo '<td>'.$linha['nome_curso'].'</td>';
?>
		
        <td><a href="deleta_matricula.php?id_alunos_cursos=<?php echo 
			 $linha['id_alunos_cursos']; ?>">Deletar</a></td></tr>
	<?php
			}
	?>
		
</table>
