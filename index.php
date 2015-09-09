<?php 
    include("./src/conexao.php");
    include("./src/insert.php");
    
    include("./src/variaveis.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title><?php echo $nome_site;?></title>
        <?php include("includes/cabecalho.php");?>
    </head>
    <body>
        <div class="container">
            <?php include("includes/header.php");?>
            
            <div class="container-conteudo">
                <div class="conteudo">
                    <div class="container-banner" style="background: url(imagens/banner1.jpg) no-repeat center">
                        <ol>
                            <li class="ativo"><a href="#">&nbsp;</a></li>
                            <li><a href="#">&nbsp;</a></li>
                            <li><a href="#">&nbsp;</a></li>
                        </ol>
                    </div>
                    <div class="container-produto">
                        <div class="container-title" style="background: #fff;">
                            <div class="title text">Produtos -&nbsp;</div>
                            <div class="more text"><a href="#"><img src="imagens/icon-busca.png" alt="ver mais"/> ver mais</a></div>
                        </div>
                        <div class="produtos">
                            <ul style="background: #fff;">
                                <li class="no-margin-top">
                                    <a href="#">
                                        <div class="container-info">
                                            <div class="info-img">
                                                <img src="imagens/icon-produto1.png" alt="produto1"/>
                                            </div>
                                            <div class="info-text text">
                                                Diablo 3 <br/>
                                                Xbox 360, Pc e Ps4<br/>
                                                Apenas : <strong>R$ 99,90</strong>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                
                                <li class="no-margin-top">
                                    <a href="#">
                                        <div class="container-info">
                                            <div class="info-img">
                                                <img src="imagens/icon-produto2.jpg" alt="produto2"/>
                                            </div>
                                            <div class="info-text text">
                                                Pokémon Ruby<br/>
                                                GBA<br/>
                                                Apenas : <strong>R$ 29,90</strong>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                
                                <li class="no-margin-top">
                                    <a href="#">
                                        <div class="container-info">
                                            <div class="info-img">
                                                <img src="imagens/icon-produto3.jpg" alt="produto3"/>
                                            </div>
                                            <div class="info-text text">
                                                Super Mario World <br/>
                                                Super Nintendo<br/>
                                                Apenas : <strong>R$ 15,90</strong>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                
                                <li class="no-margin-top">
                                    <a href="#">
                                        <div class="container-info">
                                            <div class="info-img">
                                                <img src="imagens/icon-produto4.jpg" alt="produto4"/>
                                            </div>
                                            <div class="info-text text">
                                                Bayonetta 2 <br/>
                                                WIIU<br/>
                                                Apenas : <strong>R$ 199,90</strong>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="#">
                                        <div class="container-info">
                                            <div class="info-img">
                                                <img src="imagens/icon-produto1.png" alt="produto1"/>
                                            </div>
                                            <div class="info-text text">
                                                Diablo 3 <br/>
                                                Xbox 360, Pc e Ps4<br/>
                                                Apenas : <strong>R$ 99,90</strong>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="#">
                                        <div class="container-info">
                                            <div class="info-img">
                                                <img src="imagens/icon-produto2.jpg" alt="produto2"/>
                                            </div>
                                            <div class="info-text text">
                                                Pokémon Ruby<br/>
                                                GBA<br/>
                                                Apenas : <strong>R$ 29,90</strong>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="#">
                                        <div class="container-info">
                                            <div class="info-img">
                                                <img src="imagens/icon-produto3.jpg" alt="produto3"/>
                                            </div>
                                            <div class="info-text text">
                                                Super Mario World <br/>
                                                Super Nintendo<br/>
                                                Apenas : <strong>R$ 15,90</strong>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="#">
                                        <div class="container-info">
                                            <div class="info-img">
                                                <img src="imagens/icon-produto4.jpg" alt="produto4"/>
                                            </div>
                                            <div class="info-text text">
                                                Bayonetta 2 <br/>
                                                WIIU<br/>
                                                Apenas : <strong>R$ 199,90</strong>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php include("includes/footer.php");?>
        </div>
    </body>
</html>
