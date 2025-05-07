<section class="cadastro">
    <div class="container box">
        <h2><?php echo $trad['ef_cadastro']; ?></h2>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" name="nome" placeholder="<?php echo $trad['form_nome']; ?>">
            <input type="text" name="email" placeholder="<?php echo $trad['form_email']; ?>">
            <input type="password" name="senha" placeholder="<?php echo $trad['form_senha']; ?>">
            <p><?php echo $trad['texto_pfp']; ?>"</p>
            <input type="file" name="imagem">
            <input type="submit" name="cadastro" value="<?php echo $trad['cadastrar']; ?>">
        </form>
    </div><!-- Container>
</section>