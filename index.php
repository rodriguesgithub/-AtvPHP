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
	<h2>Login</h2>
	<form action="/action_page.php" method="POST">
		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" class="form-control" id="email" placeholder="Digite seu email" name="email" maxlength="40" required autofocus>
		</div>
		<div class="form-group">
			<label for="pwd">Senha:</label>
			<input type="password" class="form-control" id="pwd" placeholder="Digite sua senha" name="pswd" maxlength="10" required>
		</div>
		<div class="form-group form-check">
			<label class="form-check-label">
				<input class="form-check-input" type="checkbox" name="remember"> Mantenha-me conectado
			</label>
		</div>
		<button type="submit" class="btn btn-primary">Entrar</button>
		<br>
		<br>
		<label>Não pussui conta?</label>
		<br>
		<a href="cadastrar.php">Criar uma conta</a>
	</form>
</div>

</body>
</html>