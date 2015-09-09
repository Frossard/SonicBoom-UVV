<div id="footer">
    <div class="container-footer">
        <div class="top-footer">
            <ul id="contato-footer">
                <li><a href="mailto:<?php echo $email;?>" class="icon-mail"><?php echo $email;?></a></li>
                <li><a href="" class="icon-skype"><?php echo $skype;?></a></li>
                <li><span class="icon-phone"><?php echo $telefone1;?></span></li>
            </ul>
            <div id="newsletter">
                <p>Receba nossas novidades: <?php echo (isset($msg) ? '<span style="color: #fff;">'.$msg.'</span></p>' : "");?>
                <form method="post" action="#footer">
                    <input type="text" name="news-nome" placeholder="Nome" required/>
                    <input type="text" name="news-email" placeholder="E-mail" required/>
                    <input type="submit" value="Enviar"/>
                </form>
            </div>
        </div>
        <div class="bot-footer">
            <span>Sonic Boom LTDA todos os direitos reservados</span>
        </div>
    </div>
</div>

