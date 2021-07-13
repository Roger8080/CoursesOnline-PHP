<a button type="button" class="btn btn-info" href="?pagina=inserir_matricula">Inserir nova matricula</a>
<br><br>
<table class="table table-hover table-striped" id="matriculas">
 
	<thead>
		<tr>
			<th> Nome aluno</th>				
			<th> Nome curso </th>	
			<th> Deletar Matricula </th>
		</tr>
	</thead>

	<tbody>
		<?php 
			while($linha = mysqli_fetch_array($consulta_matriculas)){
				echo '<tr><td >'.$linha['nome'].'</td>';
				echo '<td>'.$linha['nome_curso'].'</td>';
				?>
		
				<td><a class="text-danger" href="deleta_matricula.php?id_alunos_cursos=<?php echo 
					$linha['id_alunos_cursos']; ?>">
					<i class="fas fa-trash-alt"></i>
					</a></td></tr>
					<?php
				}
			?>
	</tbody>
	
</table>
