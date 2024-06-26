<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Music Space</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/music.png">
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.structure.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.theme.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style1.css" type="text/css" />

	</head>
    <body>

	<div class="container">
		<div class="card" style="background-color:#f2f2f2; border: 1px solid #7575a3; padding: 5px; width:40%; margin: 20px auto;">
			<form method="POST" style="padding: 5px;">
				<div class="form-group">
						<label style="color: #000;" for="nome">Nome:</label>
						<input type="text" class="form-control" id="name" name="name" style="width:100%;">
                        <label style="color: #000;"for="descrição">Descrição:</label>
						<input type="text" class="form-control" id="desc" name="desc" style="width:100%;">
						<label style="color: #000;"for="stock">Stock:</label>
						<input type="text" class="form-control" id="stock" name="stock" style="width:100%;">
						<label style="color: #000;"for="preço">Preço:</label>
						<input type="text" class="form-control" id="price" name="price" style="width:100%;">
						<label style="color: #000;"for="Preço sei lá do que">Preço sei lá do que:</label>
						<input type="text" class="form-control" id="price_from" name="price_from" style="width:100%;">
						<br>
						<button type="submit" class="btn btn-primary">Cadastrar</button>
				</div>
			</form>
		</div>
	</div>

    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	</body>
</html>