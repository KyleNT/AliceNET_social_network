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
<!-- <header style="padding: 0; "> -->
<header>
	<!--<div class="container">-->
		<div class="center">
		<!--<div style="margin-top: 8px;" class="logo"><a href="<?php # echo INCLUDE_PATH ?>">AliceNET</a></div> -->
		<div class="logo left"><a href="<?php echo INCLUDE_PATH ?>">AliceNET</a></div><!-- Logo -->

        <!-- <div class="btn-opt-menu"> -->
		<nav class="desktop right">
			<?php
			//use controller\solicitacoesController; // Ajuste o namespace conforme necessário
			//$solicitacoesController = new solicitacoesController();
			
			$solicitacoesPendentes = count(\controller\solicitacoesController::listarSolicitacoes()); ?>
			<ul>
				<li><a style="background-color: transparent;" href="<?php echo INCLUDE_PATH ?>solicitacoes"><?php echo $trad['solicitacoes']; ?> (<?php echo $solicitacoesPendentes; ?>)</a></li>
				<li><a style="background-color: transparent;" href="<?php echo INCLUDE_PATH ?>comunidade"><?php echo $trad['comunidade']; ?></a></li>
				<li><a href="<?php echo INCLUDE_PATH ?>me?sair"><i class="fa fa-times"></i> <?php echo $trad['sair']; ?> </a></li>
			</ul>
		</nav>
        <!-- </div> -->

		
		<nav class="mobile right">
                <div class="botao-menu-mobile">
                <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
				<?php
			//use controller\solicitacoesController; // Ajuste o namespace conforme necessário
			//$solicitacoesController = new solicitacoesController();
			
			$solicitacoesPendentes = count(\controller\solicitacoesController::listarSolicitacoes()); ?>
			<ul>
				<li><a style="background-color: transparent;" href="<?php echo INCLUDE_PATH ?>solicitacoes"><?php echo $trad['solicitacoes']; ?> (<?php echo $solicitacoesPendentes; ?>)</a></li>
				<li><a style="background-color: transparent;" href="<?php echo INCLUDE_PATH ?>comunidade"><?php echo $trad['comunidade']; ?></a></li>
				<li><a href="<?php echo INCLUDE_PATH ?>me?sair"><i class="fa fa-times"></i> <?php echo $trad['sair']; ?> </a></li>
			</ul>
            </nav>
			

	<nav class="mobile2 left"> <!-- Olhe em iso 639-1-->
        <div class="botao-menu-mobile2">
             <i class="fa fa-globe" aria-hidden="true"></i>
         </div>
		 <div class="menu-idiomas">
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