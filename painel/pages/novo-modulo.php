<div class="box-content">
	<h2><i class="fa fa-pencil"></i> Adicionar Módulo</h2>

	<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){
			
				$nome = $_POST['nome'];

				if($nome == ''){
					Painel::alert('erro','Você precisa preencher todos os campos!');
				}else{
					$sql = \MySql::conectar()->prepare("INSERT INTO `tb_admin.modulos` VALUES (null,?)");
					$sql->execute(array($nome));
					Painel::alert('sucesso','O módulo foi cadastrado com sucesso!');
				}
				

			}
		?>

		<div class="form-group">
			<label>Nome do módulo:</label>
			<input type="text" name="nome">
		</div><!--form-group-->

		<div class="form-group">
			<input type="submit" name="acao" value="Cadastrar módulo!">
		</div><!--form-group-->



	</form>



</div><!--box-content-->