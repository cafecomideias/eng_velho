<?php
$pagina = "restaurante";
require_once('inc_head.php');
require_once '../Di/Container.php'; 
$di = new Container();
$model = $di->getModel('clube');
$restaurante = $model->find('id',2);

$fotosModel = $di->getModel('res_fotos');
$fotos = $fotosModel->fetchAll();

?>
<title>Restaurante - Clube de Pesca Engenho Velho | Trindade - Goiás</title>
<meta name="title" content="<? //=$resDados['titulo'];?>" />
<meta name="description" content="<? //=$resPag['descricao'];?>" />
<meta name="keywords" content="<? //=$resPag['palavras_chave'];?>" />
<!-- Tags Facebook -->
<meta property="og:title" content="<? //=$resDados['titulo'];?>" />
<meta property="og:description" content="<? //=$resPag['descricao'];?>" />
<meta property="og:type" content="website" />
<meta property="og:locale" content="pt_BR" />
<meta property="og:url" content="<? //=$resDados['url'];?>" />
<meta property="og:image" content="<? //=$resDados['url'];?>/images/avatar.png" />
<meta property="og:site_name" content="<? //=$resDados['titulo'];?>" />
<!-- Tags Facebook -->
<link href="_css/fancybox.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="_js/jfancybox.js"></script>
<script type="text/javascript" src="_js/jquery.scrollbox.js"></script>
<script type="text/javascript">
$(function () {
	//PARCEIROS
	$('#demo5').scrollbox({
	  autoPlay: false,
	  switchItems: 5,
      distance: 134
    });
    $('#demo5-backward').click(function () {
      $('#demo5').trigger('backward');
    });
    $('#demo5-forward').click(function () {
      $('#demo5').trigger('forward');
    });
	//AMPLIAR
	$("a[rel=album]").fancybox({
		'transitionIn'		: 'none',
		'transitionOut'		: 'none',
		'titlePosition' 	: 'over',
		'overlayColor'		: '#000',
		'overlayOpacity'	: 0.9,
		'titleFormat'		: function(title) {
			return '<span id="fancybox-title-over">' + (title.length ? title : '') + '</span>';
		}
	});
});
</script>
</head>
<body class="<?=$pagina;?>">
<?php require_once('inc_header.php');?>
<!-- CONTENT -->
<section class="cont-center">
	<!-- .content -->
	<div class="content">
    	<!-- titulo-pagina -->
        <h1 class="titulo-pagina">Restaurante</h1>
        <div class="one">
            <?= $restaurante->texto; ?>
        </div>
        <div class="two">
            <a href="javascript:void(0);" class="prev" id="demo5-backward" title="Anteriores">Anteriores</a>
            <div id="demo5" class="scroll-img">
                <ul>
                <?php foreach($fotos as $foto): ?>
                    <li><a href="painel/<?= $foto->img;?>" rel="album" title="<?= $foto->legenda; ?>"><img src="painel/<?= $foto->img;?>" width="200" height="200" /></a></li>
                <?php endforeach; ?>
                </ul>
            </div>
    	  <a href="javascript:void(0);" class="next" id="demo5-forward" title="Próximas">Próximas</a>
        </div>
    </div><!-- /.content -->	
</section>
<?php require_once('inc_footer.php'); ?>