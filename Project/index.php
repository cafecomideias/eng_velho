<?php
$pagina = "home";
require_once('inc_head.php');
require_once '../Di/Container.php'; 
$di = new Container();


$modelNot = $di->getModel('noticias');
$noticia = $modelNot->fetchLast();
$noticia->img = str_replace('../', "", $noticia->img);

$modelPromo = $di->getModel('promocoes');
$promocao = $modelPromo->fetchLast();
if($promocao)
    $promocao->img = str_replace('../', "", $promocao->img);


$modelDestaques = $di->getModel('destaques');
$destaques = $modelDestaques->fetchAll();

$modelChamadas = $di->getModel('chamadas');
$chamadas = $modelChamadas->fetchAll();

$modelParceiros = $di->getModel('parceiros');
$parceiros = $modelParceiros->fetchAll();

$modelRecordes = $di->getModel('recordes');
$recordes = $modelRecordes->fetchLimite(8);
$cont = 1;

?>
<title>Clube de Pesca Engenho Velho | Trindade - Goiás</title>
<meta name="title" content="<?=$dadosSite->titulo;?>" />
<meta name="description" content="<? //=$resPag['descricao'];?>" />
<meta name="keywords" content="<? //=$resPag['palavras_chave'];?>" />
<!-- Tags Facebook -->
<meta property="og:title" content="<?=$dadosSite->titulo;?>" />
<meta property="og:description" content="<? //=$resPag['descricao'];?>" />
<meta property="og:type" content="website" />
<meta property="og:locale" content="pt_BR" />
<meta property="og:url" content="<? //=$resDados['url'];?>" />
<meta property="og:image" content="<? //=$resDados['url'];?>/images/avatar.png" />
<meta property="og:site_name" content="<? //=$resDados['titulo'];?>" />
<!-- Tags Facebook -->
<script type="text/javascript" src="_js/jquery.scrollbox.js"></script>
<script type="text/javascript">
$(function () {
	//DESTAQUES
	$('#dest').cycle({
		fx:     'fade',
		prev:   '#prev-d',
		next:   '#next-d',
		timeout: 7000
	});
	//PARCEIROS
	$('#demo5').scrollbox({
	  autoPlay: false,
      direction: 'h',
	  switchItems: 3,
      distance: 134
    });
    $('#demo5-backward').click(function () {
      $('#demo5').trigger('backward');
    });
    $('#demo5-forward').click(function () {
      $('#demo5').trigger('forward');
    });
});
</script>
</head>
<body class="home">
<?php require_once('inc_header.php');?>
<!-- CONTENT -->
<section class="cont-center">
	<!-- .content -->
	<div class="content">
    	<!-- .ranking-pescadores -->
    	<article class="ranking-pescadores">
        	<script type="text/javascript" src="_js/wz_tooltip.js"></script>
        	<ul>
                    <?php foreach($recordes as $recorde): ?>
                        <li>
                            <a href="/pescadores/ranking" onMouseOver="Tip('<?= $recorde->pescador;?> - <?= $cont; ?>º Lugar / <?= $recorde->peso ?> kg')" onMouseOut="UnTip()">
                                <span><img src="images/_upload/pescadores/0<?= $cont; ?>.jpg" width="92" height="55" alt="<?= $recorde->pescador; ?>" /></span>
                            </a>
                        </li>
                        
                    <?php $cont++;  endforeach; ?>
            	
            </ul>
            <a class="bt-ranking-pescadores" href="/pescadores/ranking" title="Ranking de Pescadores">Ranking de Pescadores</a>
        </article><!-- /.ranking-pescadores -->
        <!-- .noticias -->
        <article class="noticias">
        	<h2>Notícias</h2>
            <a href="/noticias/<?= $noticia->data; ?>/<?= $noticia->slug; ?>" title="<?= $noticia->titulo; ?>">
                <img src="<?= $noticia->img; ?>" width="480" height="230" alt="<?= $noticia->titulo; ?>" />
                <?= $noticia->titulo; ?>
            </a>
        </article><!-- /.noticias -->
        <!-- .promocoes -->
        <article class="promocoes">
        	<h2>Promoções</h2>
            <a href="/promocoes/<?= $promocao->data; ?>/<?= $promocao->id; ?>" title="<?= $promocao->titulo;?>">
                <img src="<?= $promocao->img; ?>" width="480" height="230" alt="<?= $promocao->titulo;?>" />
                <?= $promocao->titulo;?>
            </a>
        </article><!-- /.promocoes -->
        <!-- .destaque -->
        <article class="destaque">
        	<h2>Destaque</h2>
            <!-- barra -->
            <div class="barra"></div>
            <!-- mascara -->
            <div class="mascara"></div>
            <!-- espaco-vip -->
            <div class="espaco-vip">
            	<h4>Cadastre-se e tenha acesso ao</h4>
                <h3>ESPAÇO VIP</h3>
                <a href="/cadastre-se" title="Cadastrar">Cadastrar</a>
            </div>
            <!-- paginacao -->
            <a class="next" id="next-d" href="javascript:void(0);" title="Próximo">Próximo</a>
            <a class="prev" id="prev-d" href="javascript:void(0);" title="Anterior">Anterior</a>
            <ul id="dest">
                <?php foreach($destaques as $destaque): ?>
                    <li>
                        <a href="#" target="<?= $destaque->target; ?>" title="<?= $destaque->titulo; ?>">
                            <img src="painel/<?=$destaque->img; ?>" width="492" height="484" alt="<?= $destaque->titulo; ?> " />
                            <span>
                                <em><?=strtoupper(formaData($destaque->data));?></em>
                                <br />
                                <strong><?= $destaque->titulo; ?></strong>
                            </span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </article><!-- /.destaque -->
        <!-- .botoes -->
        <article class="botoes">
            <?php foreach($chamadas as $chamada): ?>
                <a href="<?= $chamada->url;?>" target="<?=$chamada->target;?>" title="<?= $chamada->titulo;?>">
                    <img src="painel/<?= $chamada->img;?>" width="320" height="125" alt="<?= $chamada->titulo;?>" />
                </a>
            <?php endforeach; ?>
        </article><!-- /.botoes -->
        <!-- .parceiros -->
        <article class="parceiros">
        	<h2>Parceiros</h2>
            <!-- barra -->
            <div class="barra"></div>
            <div id="demo5" class="scroll-img">
                <ul>
                    <?php foreach($parceiros as $parceiro): ?>
                        <li>
                            <a href="<?= $parceiro->link; ?>" target="_blank" ><img src="painel/<?= $parceiro->img; ?>" width="145" height="75" alt="<?= $parceiro->titulo; ?>" /></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <!-- paginacao -->
            <a class="prev" id="demo5-backward" href="javascript:void(0);" title="Anterior">Anterior</a>
            <a class="next" id="demo5-forward" href="javascript:void(0);" title="Próximo">Próximo</a>
        </article><!-- /.parceiros -->
        <!-- .localizacao -->
        <article class="localizacao">
        	<h2>Localização</h2>
            <!-- barra -->
            <div class="barra"></div>
            <iframe width="480" height="210" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt&amp;geocode=&amp;q=engenho+velho+trindade&amp;aq=&amp;sll=-15.947269,-49.579061&amp;sspn=19.01873,33.815918&amp;ie=UTF8&amp;hq=engenho+velho&amp;hnear=Trindade+-+Goi%C3%A1s&amp;ll=-16.639826,-49.451734&amp;spn=0.037172,0.066047&amp;t=h&amp;z=14&amp;iwloc=A&amp;cid=203949430617944072&amp;output=embed"></iframe>
        </article><!-- /.parceiros -->
    </div><!-- /.content -->	
</section>
<?php require_once('inc_footer.php'); ?>

<?php 
    function formaData($data){
        str_replace('-', "/", $data);
        $array = explode('-',$data);
        $mes;
        switch ($array[1]){
            case "01" : $mes = "Janeiro";break;
            case "02" : $mes = "Fevereiro";break;
            case "03" : $mes = "Março";break;
            case "04" : $mes = "Abril";break;
            case "05" : $mes = "Maio";break;
            case "06" : $mes = "Junho";break;
            case "07" : $mes = "Julho";break;
            case "08" : $mes = "Agosto";break;
            case "09" : $mes = "Setembro";break;
            case "10" : $mes = "Outubro";break;
            case "11" : $mes = "Novembro";break;
            case "12" : $mes = "Dezembro";break;
        }
        
        return "$array[2] de $mes de $array[0]";
    }
    
?>