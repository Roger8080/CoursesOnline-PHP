<h1 style="text-align:center">Bem vindos a Plataforma</h1>

<?php if (isset($_GET['erro'])){ ?>

<div class="alert alert-danger" role="alert">
    Usuário ou Senha incorretos!
</div>

<?php } ?>


<form method="post" action="login.php">
	<label class="badge badge-info">Nome do Usuario</label>
	<input type="text" name="usuario" placeholder="nome do usuario" class="form-control">
	<br>
	<label class="badge badge-info">Senha do usuário</label>
	<input type="password" name="senha" placeholder="insira a senha" class="form-control">
    <br>
    <input type="submit" value="entrar" class="btn btn-info">	
</form>

