<section class="comunidade">
    <div class="container">
        <div class="w100">
            <h2 class="title"><?php echo $trad['comunidade']; ?></h2>
            <?php
                $select = \MySql::conectar()->prepare("SELECT * FROM `tb_site.membros`");
                $select->execute();
                $select = $select->fetchAll();
                foreach($select as $key => $value)
                {
                    if($value['id'] == $_SESSION['id_membro'])
                        continue;
            ?>
                <div class="membro-listagem">
                    <div class="box-imagem">
                        <div style="background-image: url('<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $value['imagem']; ?>');" class="box-imagem-wraper">

                        </div> <!-- Box Imagem Wraper -->
                    </div><!-- Box Imagem -->
                    <p><i class="fa fa-user"></i> <?php echo $value['nome']; ?></p>
                    <?php 
                        if($arr['controller']->isAmigo($value['id'])){
                            echo '<span style="display:inline-block; opacity:0.4; font-size:14px; background:green; color:white;padding: 4px 5px;border-radius: 8%;" href=""><i class="fa fa-check"></i> '.$trad['amigo'].' </span>';
                        }
                        else if($arr['controller']->amigoPendente($value['id']) == false){
                    ?>
                            <a href="<?php INCLUDE_PATH ?>comunidade?addFriend=<?php echo $value['id']; ?>"><?php echo $trad['add_amigo']; ?></a>
                        <?php
                        } else {
                        ?>
                            <a style="opacity: 0.4; background:gray;" href="javascript:void(0);"> <?php echo $trad['soc_pen']; ?> </a>
                    <?php
                        } 
                    ?>
                </div><!-- Membro Listagem -->
            <?php
                }
            ?>
        </div>
    </div>
</section>