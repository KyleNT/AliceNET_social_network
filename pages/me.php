<section class="perfil-info ">
    <div style="max-width: 1280px;" class="container">
        <div class="w30">
            <h2 class="title"><?php echo $_SESSION['nome_membro'];?></h2>
            <div class="container-img">
                <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img_membro']?>" alt="" srcset="">
            </div><!-- Container img -->
            <div class="lista-amigos">
                <?php
                    $amigos = \models\membrosModel::listarAmigos();
                ?>
                <h3><i class="fa fa-users" aria-hidden="true"></i> <?php echo $trad['minhas_amizades']; ?> (<?php echo count($amigos) ?>)</h3>

                <?php
                    foreach ($amigos as $key => $value) {
                    $membro = \models\membrosModel::getMembroById($value);
                ?>

                <div class="img-single-amigo">
                    <div style="background-image: url(<?php echo INCLUDE_PATH_PAINEL.'uploads/'.$membro['imagem']; ?>)" class="img-single-amigo-wraper">
                    </div>
                </div><!-- img-single-amigo -->

                <?php
                    }
                ?>
                <div class="clear">

                </div>
            </div> <!-- Lista-amigos -->
        </div>
    </div>
</section>

<section class="feed">
    <div style="max-width: 1280px;" class="container">
        <div class="w70">
        <h2 class="title"> <?php echo $trad['pensa_hoje']; ?> </h2>
        <form action="" method="post">
            <textarea name="mensagem" placeholder="<?php echo $trad['post_aqui']; ?>"></textarea>
            <input type="submit" name="feed_post" value="<?php echo $trad['enviar']; ?>">
        </form>
        <!-- Feed -->
        <br />

        <?php
            $postsFeed = \MySql::conectar()->prepare("SELECT * FROM `tb_site.feed` ORDER BY id DESC");

            $postsFeed->execute();
            $postsFeed = $postsFeed->fetchAll();
            foreach($postsFeed as $key => $value){
                $membro = \models\membrosModel::getMembroById($value['membro_id']);
        ?>

        <div class="post-single-user">
                <div class="img-user-post">
                    <img src="<?php echo INCLUDE_PATH_PAINEL.'uploads/' ?><?php echo $membro['imagem']; ?>" />
                </div>
                <div class="post-user-single">
                    <p style="color: blue;"> <?php echo $membro['nome']; ?></p>
                    <p> <?php echo $value['post']; ?> </p>
                </div>
                <div class="clear"></div>
        </div> <!-- Post single user -->

        <?php
            }
        ?>
        </div>
    </div><!-- Container -->
</section>

