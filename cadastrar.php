<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<h2>Cadastro de usuário</h2>
	<form action="processa.php" method="POST">
		<div class="form-group">
			<label for="nome">Nome:</label>
			<input type="nome" class="form-control" id="nome" placeholder="Digite seu nome" name="nome" maxlength="20" required autofocus>
		</div>
		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" class="form-control" id="email" placeholder="Digite seu email" name="email" maxlength="40" required>
		</div>
		<div class="form-group">
			<label for="pwd">Senha:</label>
			<input type="password" class="form-control" id="pwd" placeholder="Digite sua senha" name="pswd1" maxlength="10" required>
		</div>
		<div class="form-group">
			<label for="pwd2">Senha:</label>
			<input type="password" class="form-control" id="pwd2" placeholder="Confirme sua senha" name="pswd2" maxlength="10" required>
		</div>
		
		<button type="submit" class="btn btn-primary" >Cadastrar</button>
	</form>
</div>

</body>
</html>