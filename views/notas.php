<table style="border:1px solid #ccc; width: 100%">
	<thead>
		<tr>
			<th>Nome aluno</th>
			<th>Nome curso</th>
			<th>Nota</th>
		</tr>
	</thead>
	

		<?php 
			while($linha = mysqli_fetch_array($consulta_notas)){
				echo '<tr><td >'.$linha['nome'].'</td>';
				echo '<td>'.$linha['nome_curso'].'</td>';
				echo '<td>'.$linha['vlr_nota'].'</td></tr>';
			}
		?>
		
</table>