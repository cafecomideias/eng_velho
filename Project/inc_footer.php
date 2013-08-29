<?php 
    $modelDadosSite = $di->getModel('dados');
    $dadosSite = $modelDadosSite->find('id',1);
?>
<!-- FOOTER -->
<footer>
	<!-- .rodape -->
	<section class="rodape cont-center">
    	<div class="clearfix">
        	<!-- .redes-sociais -->
        	<div class="one">
                <ul class="redes-sociais">
                    <li><a href="<?= $dadosSite->facebook;?>" class="facebook" title="Facebook">Facebook</a></li>
                    <li><a href="<?= $dadosSite->twitter;?>" class="twitter" title="Twitter">Twitter</a></li>
                    <li><a href="<?= $dadosSite->youtube;?>" class="youtube" title="Youtube">Youtube</a></li>
                </ul>
            </div>
            <!-- .telefone -->
            <div class="two telefone">
                <h2><?= $dadosSite->fone1; ?></h2>
                <h2><?= $dadosSite->fone2;?></h2>
            </div>
        </div>
        <div class="clearfix">
            <!-- .copyright -->
        	<div class="one">
            	<p class="copyright">
            		© 2007-2013 Clube de Pesca Engenho Velho - Trindade/GO. Todos os direitos reservados.
                	<br />
                	Proibida a reprodução total ou parcial do conteúdo e padrão visual sem expressa permissão. 
            	</p>
            </div>
            <!-- .developed -->
            <div class="two">
        		<a href="http://www.cafecomideias.com.br" target="_blank" class="cci" title="Agência Café com Ideias"><img src="images/logo-cafe-com-ideias.png" width="60" height="21" alt="Agência Café com Ideias" /></a>
            </div>
        </div>
    </section><!-- /.rodape -->
    <a id="bt-topo" href="#" title="Topo da Página">Topo da Página</a>
    <!-- .menu-footer -->
    <nav class="menu-footer">
    	<ul class="cont-center">
        	<li><a href="/" title="Home">Home</a></li>
            <li><a href="/o-clube" title="O Clube">O Clube</a></li>
            <li><a href="/restaurante" title="Restaurante">Restaurante</a></li>
            <li><a href="/fazendinha" title="Fazendinha">Fazendinha</a></li>
            <li><a href="/pescadores" title="Pescadores">Pescadores</a></li>
            <li><a href="/recordes" title="Recordes">Recordes</a></li>
            <li><a href="/promocoes" title="Promoções">Promoções</a></li>
            <li><a href="/noticias" title="Notícias">Pescadores</a></li>
            <li><a href="/reservas" title="Reservas">Reservas</a></li>
            <li><a href="/fale-conosco" title="Fale Conosco">Fale Conosco</a></li>
        </ul>
    </nav><!-- .menu-footer -->
</footer>
</body>
</html>