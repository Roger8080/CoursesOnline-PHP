<a href="?pagina=inserir_aluno">Inserir novo aluno</a>
<table style="border:1px solid #ccc; width: 100%">
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
	

	<?php 
		while($linha = mysqli_fetch_array($consulta_alunos)){
			echo '<tr><td>'.$linha['nome'].'</td>';
			echo '<td>'.$linha['data_nascimento'].'</td>';
			echo '<td>'.$linha['endereco'].'</td>';
			echo '<td>'.$linha['cidade'].'</td>';
			echo '<td>'.$linha['estado'].'</td>';
			echo '<td>'.$linha['cpf'].'</td>';	
	?>


<td><a href="?pagina=inserir_aluno&editar=<?php echo 
			 $linha['id_aluno']; ?>">Editar</a></td>	
<td><a href="deleta_aluno.php?id_aluno=<?php echo 
             $linha['id_aluno']; ?>">Deletar</a></td></tr>
    <?php
			}
	?>
	
	
</table>