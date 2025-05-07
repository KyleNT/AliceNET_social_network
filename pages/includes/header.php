<?php
include('Tradutor.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>AliceNET</title>
	<meta charset="viewport" content="width=device-width;initial-scale=1.0;maximum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>estilo/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>estilo/style.css">
</head>
<body>
<base base="<?php echo INCLUDE_PATH; ?>" />
<header>
	<!-- <div class="container"> -->
	<div class="center">
		<!-- <div class="logo"><a href="<?php #echo INCLUDE_PATH ?>">AliceNET</a></div> -->

		<div class="logo left"><a href="<?php echo INCLUDE_PATH ?>">AliceNET</a></div><!-- Logo -->

		<nav class="desktop right">
			<div class="form-login">
			<form action="" method="post" enctype="multipart/form-data">
				<input type="text" name="email" placeholder="<?php echo $trad['form_email1']; ?>">
				<input type="password" name="senha" placeholder="<?php echo $trad['form_senha1']; ?>">
				<input type="submit" name="login" value="<?php echo $trad['form_login1']; ?>">
			</form>
			</div><!-- Form Login -->
		</nav>

		<nav class="mobile right">
			<div class="botao-menu-mobile">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</div>
			<div class="menu-login">
				<form action="" method="post" enctype="multipart/form-data">
					<input type="text" name="email" placeholder="<?php echo $trad['form_email1']; ?>">
					<input type="password" name="senha" placeholder="<?php echo $trad['form_senha1']; ?>">
					<input type="submit" name="login" value="<?php echo $trad['form_login1']; ?>">
				</form>
			</div>
		</nav>

		<nav class="mobile2 left"> <!-- Olhe em iso 639-1-->
			<div class="botao-menu-mobile2">
				<i class="fa fa-globe" aria-hidden="true"></i>
			</div>
			<div class="menu-idiomas" style="display: block;">
				<form method="post" action="">
					<select name="idioma" onchange="this.form.submit()">
					<option value="da" <?php echo (isset($_POST['idioma']) && $_POST['idioma'] == 'da') ? 'selected' : ''; ?>>Dansk</option>
					<option value="de" <?php echo (isset($_POST['idioma']) && $_POST['idioma'] == 'de') ? 'selected' : ''; ?>>Deutsch</option>
					<option value="el" <?php echo (isset($_POST['idioma']) && $_POST['idioma'] == 'el') ? 'selected' : ''; ?>>Νέα Ελληνικά</option>
					<option value="en" <?php echo (isset($_POST['idioma']) && $_POST['idioma'] == 'en') ? 'selected' : ''; ?>>English</option>
					<option value="es" <?php echo (isset($_POST['idioma']) && $_POST['idioma'] == 'es') ? 'selected' : ''; ?>>Español</option>
					<option value="fr" <?php echo (isset($_POST['idioma']) && $_POST['idioma'] == 'fr') ? 'selected' : ''; ?>>Français</option>
					<option value="hi" <?php echo (isset($_POST['idioma']) && $_POST['idioma'] == 'hi') ? 'selected' : ''; ?>>हिन्दी</option>
					<option value="it" <?php echo (isset($_POST['idioma']) && $_POST['idioma'] == 'it') ? 'selected' : ''; ?>>Italiano</option>
					<option value="ja" <?php echo (isset($_POST['idioma']) && $_POST['idioma'] == 'ja') ? 'selected' : ''; ?>>日本語</option>
					<option value="ko" <?php echo (isset($_POST['idioma']) && $_POST['idioma'] == 'ko') ? 'selected' : ''; ?>>한국어</option>
					<option value="la" <?php echo (isset($_POST['idioma']) && $_POST['idioma'] == 'la') ? 'selected' : ''; ?>>Latinum</option>
					<option value="nl" <?php echo (isset($_POST['idioma']) && $_POST['idioma'] == 'nl') ? 'selected' : ''; ?>>Nederlands</option>
					<option value="no" <?php echo (isset($_POST['idioma']) && $_POST['idioma'] == 'no') ? 'selected' : ''; ?>>Norsk</option>
                    <option value="pt-br" <?php echo (isset($_POST['idioma']) && $_POST['idioma'] == 'pt-br') ? 'selected' : ''; ?>>Português Brasileiro</option>
                    <option value="ru" <?php echo (isset($_POST['idioma']) && $_POST['idioma'] == 'ru') ? 'selected' : ''; ?>>Русский язык</option>
                    <option value="sv" <?php echo (isset($_POST['idioma']) && $_POST['idioma'] == 'sv') ? 'selected' : ''; ?>>Svenska</option>
                    <option value="tr" <?php echo (isset($_POST['idioma']) && $_POST['idioma'] == 'tr') ? 'selected' : ''; ?>>Türkçe</option>
                    <option value="uk" <?php echo (isset($_POST['idioma']) && $_POST['idioma'] == 'uk') ? 'selected' : ''; ?>>Українська</option>
                    <option value="zh-cn" <?php echo (isset($_POST['idioma']) && $_POST['idioma'] == 'zh-cn') ? 'selected' : ''; ?>>中文</option>
                    <option value="zh-tw" <?php echo (isset($_POST['idioma']) && $_POST['idioma'] == 'zh-tw') ? 'selected' : ''; ?>>漢語</option>
					</select>
				</form>
			</div>
		</nav>

	<div class="clear"></div>
	</div><!-- Container -->
</header>
<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH ?>js/alnet.js"></script>