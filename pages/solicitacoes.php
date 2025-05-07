<section class="comunidade">
    <div class="container">
        <div class="w100">
            <h2 class="title"><?php echo $trad['sol_pen']; ?> </h2>

            <table class="solicitacoes__table">
            <?php
            $solicitacoesPendentes = \controller\solicitacoesController::listarSolicitacoes();
                foreach ($solicitacoesPendentes as $key => $value) {
                    //Pull informations of solicitants
                    $membro = \models\membrosModel::getMembroById($value['id_from']);
            ?>

                    <tr>
                        <td>
                            <img src="<?php echo INCLUDE_PATH_PAINEL.'uploads/'.$membro['imagem']; ?>" alt="" />
                            <p><?php echo $membro['nome']; ?></p>
                        </td>
                        <td style="text-align: right;">
                            <a href="<?php echo INCLUDE_PATH ?>solicitacoes?aceitar=<?php echo $value['id_from']?>"> <?php echo $trad['aceitar']; ?> </a>
                            <a href="<?php echo INCLUDE_PATH ?>solicitacoes?rejeitar=<?php echo $value['id_from']?>"> <?php echo $trad['rejeitar']; ?> </a>
                        </td>
                    </tr>
            <?php
                }
            ?>
            </table>

        </div>
    </div>
</section>