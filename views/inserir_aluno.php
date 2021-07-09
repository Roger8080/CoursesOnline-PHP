<?php if(!isset($_GET['editar'])){ ?>

<h2>Inserir novo Aluno</h2>


<form method="post" action="processa_aluno.php">
	<br><br>
		<label>Nome do Aluno:</label><br>
		<input type="text" name="nome_aluno" placeholder="Insira o nome do aluno">
		<br><br>
		<label>Data de Nascimento:</label><br>
		<input type="text" name="data_nascimento_aluno" placeholder="Insira a data de nascimento">
		<br><br>
		<label>Insira o Endereço:</label><br>
		<input type="text" name="endereco_aluno" placeholder="Insira o nome do aluno">
		<br><br>
		<label>Insira a Cidade:</label><br>
		<input type="text" name="cidade_aluno" placeholder="Insira o nome do aluno">
		<br><br>
		<label>Insira o Estado:</label><br>
		<input type="text" name="estado_aluno" placeholder="Insira o nome do aluno">
		<br><br>
		<label>Insira o CPF:</label><br>
		<input type="text" name="cpf_aluno" placeholder="Insira o nome do aluno">
		<br><br>	
	<input type="submit" value="Inserir Aluno">
</form>

<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_alunos)){ ?>
		<?php if($linha['id_aluno'] == $_GET['editar']){ ?>
		
	      <h2>Editar Aluno</h2>
		    <form method="post" action="edita_aluno.php">
	           <input type="hidden" name="id_aluno" value="<?php
		         echo $linha['id_aluno']; ?>">
			     <br><br>
			     <label>Nome Aluno:</label><br>
				 <input type="text" name="nome" placeholder="insira o nome do aluno"
				 value="<?php echo $linha['nome']; ?>">
				 <br><br>
				 <label>Data de Nascimento</label><br>
				 <input type="date" name="data_nascimento" placeholder="insira a data de nascimento"
				 value="<?php echo $linha['data_nascimento'];?>">
				 <br><br>
				 <label>Endereço</label><br>
				 <input type="text" name="endereco" placeholder="insira o endereço do aluno"
				 value="<?php echo $linha['endereco'];?>">
				 <br><br>
				 <label>Cidade<label><br>
				 <input type="text" name="cidade" placeholder="insira a cidade do aluno"
				 value="<?php echo $linha['cidade'];?>">
				 <br><br>
				 <label>Estado</label><br>
				 <input type="text" name="estado" placeholder="insira o Estado do aluno"
				 value="<?php echo $linha['estado'];?>">
				 <br><br>
				 <label>CPF</label><br>
				 <input type="text" name="cpf" placeholder="insira o cpf do aluno"
				 value="<?php echo $linha['cpf'];?>">
				 <br><br>
			   <input type="submit" value="editar aluno">
		    </form>
		   
		<?php } ?>
	<?php } ?>
<?php } ?>	
					

