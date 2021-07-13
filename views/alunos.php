<a button type="button" class="btn btn-info" href="?pagina=inserir_aluno">Inserir novo aluno</a>

<br><br>

<table class="table table-hover table-striped" id="alunos">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Data Nascimento</th>
			<th>Endereco</th>
			<th>Cidade</th>
			<th>Estado</th>
			<th>CPF</th>	
			<th>Editar</th>
			<th>Deletar</th>	
		</tr>
	</thead>	
	
	<tbody>
		<?php 
			while($linha = mysqli_fetch_array($consulta_alunos)){
				echo '<tr><td>'.$linha['nome'].'</td>';
				echo '<td>'.$linha['data_nascimento'].'</td>';
				echo '<td>'.$linha['endereco'].'</td>';
				echo '<td>'.$linha['cidade'].'</td>';
				echo '<td>'.$linha['estado'].'</td>';
				echo '<td>'.$linha['cpf'].'</td>';	
		?>


		<td><a class="text-info" href="?pagina=inserir_aluno&editar=<?php echo 
					 $linha['id_aluno']; ?>">
					 <i class="fas fa-user-edit"></i>
					 </a></td>	
		<td><a class="text-danger" href="deleta_aluno.php?id_aluno=<?php echo 
					 $linha['id_aluno']; ?>">
					 <i class="fas fa-user-times"></i>
					 </a></td></tr>
		<?php
			   }
		?>
	</tbody>		
</table>