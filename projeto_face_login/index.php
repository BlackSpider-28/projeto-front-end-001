<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-sacle=1.0" />
    <link href="./css/style.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>projeto login facebook</title>
</head>

<body>
    <header>

        <div class="center">
            <div class="logo">
                <h2>facebook</h2>
            </div><!--logo-->

            <form method="post" class="form-login">
                <div class="form-element">
                    <p>E-mail ou Telefone</p>
                    <input type="email">
                </div><!--email-->

                <div class="form-element">
                    <p>Senha</p>
                    <input type="password"> 
                </div><!--password-->

                <div class="form-element">
                    <input type="submit" name="acao" value="Enviar">
                </div><!--Enviar-->

            </form><!--form-login-->

            <div class="clear"></div><!--clear-->

        </div><!--center-->

    </header>
    
    <section class="main">

        <div class="center">
            <div class="titulo">
                <p>O Facebook você pde se conectar e compartilhar o que quiser e com quem é importante em sua vida.<p>
            </div><!--título-->

            <div class="img-pessoas">
                <img src="./img/GwFs3_KxNjS.png">
            </div>
        </div><!--img-pessoas-->

        <div class="abrir-conta">
            <h2>Abra Sua Conta</h2>
            <h3>É Gratuito e Sempre Será!</h3>

            <form class="criar-conta">
                <div class="w50">
                    <input placeholder="Nome" type="text">
                </div><!--w50-mome-e-sobrenome-->

                <div class="w50">
                    <input placeholder="Sobrenome" type="text">
                </div><!--w50-mome-e-sobrenome-->

                <div class="w100">
                    <input placeholder="E-mail" type="email">
                </div><!--w100-email-e-senha-->
                
                <div class="w100">
                    <input placeholder="Senha" type="password">
                </div><!--w100-email-e-senha-->

                <div class="w100">
                    <h2>Data de Nascimento:</h2>

                    <select name="nascimento-dia" class="nascimento">
                        <?php
                            for($i = 1; $i <= 31; $i++){
                        ?>        
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                    </select><!--dia-->

                    <select name="nascimento-mes" class="nascimento">
                        <option value="1">Janeiro</option>
                        <option value="2">Fevereiro</option>
                        <option value="3">Março</option>
                        <option value="4">Abril</option>
                        <option value="5">Maio</option>
                        <option value="6">Junho</option>
                        <option value="7">Julho</option>
                        <option value="8">Agosto</option>
                        <option value="9">Setembro</option>
                        <option value="10">Outubro</option>
                        <option value="11">Novembro</option>
                        <option value="12">Dezembro</option>
                    </select><!--mês-sem-php-->     

                    <select name="nascimento-ano" class="nascimento">
                    <?php
                            for($i = 1900; $i <= 2020; $i++){
                        ?>        
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                    </select><!--ano-->

                 <div class="clear"></div>
                </div><!--data-de-nascimento-->

                <div class="sexo">
                    <input type="radio" name="sexo" value="Masculino">
                    <h2>Masculino</h2>
                </div>
                <div class="sexo">
                    <input type="radio" name="sexo" value="Feminino">
                    <h2>Feminino</h2>
                </div><!--sexo-->
                <div class="clear"></div>

                <div class="w100">
                 <input type="submit" name="acao" value="cadastrar">
                </div><!--cadastrar-->

            </form><!--form-criar-conta-->

        </div><!--abrir-conta-->
        <div class="clear"></div><!--clear-->

    </section><!--main-->

    <section class="linguas">
        <div class="center">
            <a class="selected-lingua" href="#">Portugês (BR)</a>
            <a href="#">English (US)</a>
            <a href="#">Español</a>
            <a href="#">Français (France)</a>
            <a href="#">Italiano</a>
            <a href="#">العربية</a>
            <a href="#">Deutsch</a>
            <a href="#">中文(简体)</a>
            <a href="#">हिन्दी</a>
            <a href="#">日本語</a>
        </div><!--linguas-principais-->
        <div class="outros-links">
            <div class="center">
                <a href="#">Cadastre-se</a>
                <a href="#">Entrar</a>
                <a href="#">Messenger</a>
                <a href="#">Facebook Lite</a>
                <a href="#">Watch</a>
                <a href="#">Pessoas</a>
                <a href="#">Páginas</a>
                <a href="#">Categorias de Página</a>
                <a href="#">Locais</a>
                <a href="#">Jogos</a>
                <a href="#">Locais</a>
                <a href="#">Marketplace</a>
                <a href="#">Facebook Pay</a>
                <a href="#">Grupos</a>
                <a href="#">Vagas de emprego</a>
                <a href="#">Oculus</a>
                <a href="#">Portal</a>
                <a href="#">Instagram</a>
                <a href="#">Local</a>
                <a href="#">Campanhas de arrecadação de fundos</a>
                <a href="#">Serviços</a>
                <a href="#">Central de Informações de Votação</a>
                <a href="#">Sobre</a>
                <a href="#">Criar anúncio</a>
                <a href="#">Criar Página</a>
                <a href="#">Desenvolvedores</a>
                <a href="#">Carreiras</a>
                <a href="#">Privacidade</a>
                <a href="#">Cookies</a>
                <a href="#">Escolhas para anúncios</a>
                <a href="#">Termos</a>
                <a href="#">Ajuda</a>
            </div>

        </div><!--outros-links-->
   </section>

   <footer>
    Facebook © 2020
   </footer>

</body>
</html>