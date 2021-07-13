<a button type="button" class="btn btn-info" href="?pagina=inserir_curso">Inserir novo curso</a>
<br><br>
<table class="table table-hover table-striped" id="cursos">

    <thead>
	   <tr>
		   <th>Nome Curso</th>
		   <th>ID Curso</th>
		   <th>Editar</th>
		   <th>Deletar</th>
	   </tr>
	</thead>
	
	<tbody>
		<?php 
			while($linha = mysqli_fetch_array($consulta_cursos)){
				echo '<tr><td>'.$linha['nome_curso'].'</td>';
				echo '<td>'.$linha['id_curso'].'</td>';
			?>

			<td><a class="text-info" href="?pagina=inserir_curso&editar=<?php echo 
				 $linha['id_curso']; ?>">
				 <i class="fas fa-edit"></i>
				 </a></td>
			<td><a class="text-danger" href="deleta_curso.php?id_curso=<?php echo 
				 $linha['id_curso']; ?>">
				 <i class="fas fa-trash-alt"></i>
				 </a></td></tr>
		<?php
				}
			?>
	</tbody>	
	
</table>

