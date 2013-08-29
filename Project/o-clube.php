<?php
$pagina = "o-clube";
require_once('inc_head.php');
require_once '../Di/Container.php'; 
$di = new Container();
$clubeModel = $di->getModel('clube');
$clube = $clubeModel->find('id',1);
?>
<title>O Clube - Clube de Pesca Engenho Velho | Trindade - Goiás</title>
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
</head>
<body class="<?=$pagina;?>">
<?php require_once('inc_header.php');?>
<!-- CONTENT -->
<section class="cont-center">
	<!-- .content -->
	<div class="content">
    	<!-- titulo-pagina -->
        <h1 class="titulo-pagina">O Clube</h1>
        <div>
            <?= $clube->texto; ?>
        </div>
    </div><!-- /.content -->	
</section>
<?php require_once('inc_footer.php'); ?>