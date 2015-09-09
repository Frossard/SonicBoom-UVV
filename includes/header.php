<div class="header">
    <div class="container-top">
        <div class="top">
            <div class="container-logo">
                <a href="#">
                    <img src="imagens/logotipo.png" alt="logotipo"/>
                </a>
            </div>
            <div class="container-endereco">
                <div class="redes-sociais">
                    <ul>
                        <li><a href="#"><img src="imagens/icon-facebook.png" alt="facebook"/></a></li>
                        <li><a href="#"><img src="imagens/icon-twitter.png" alt="twitter"/></a></li>
                        <li><a href="#"><img src="imagens/icon-youtube.png" alt="youtube"/></a></li>
                    </ul>
                </div>
                <div class="endereco">
                    <div class="text text-title">
                        <?php echo $telefone1;?><br/>
                        <?php echo $telefone2;?><br/>
                        <?php echo $endereco;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-menu">
        <ul>
            <?php 
                foreach($menu as $texto => $link){ 
            ?>
            <li><a href="<?php echo $link;?>"><p><?php echo $texto;?></p></a></li>
            <?php 
                } 
            ?>
        </ul>
    </div>
</div>

