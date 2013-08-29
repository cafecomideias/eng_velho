<?php
$pagina = "recordes";
require_once('inc_head.php');
?>
<title>Recordes - Clube de Pesca Engenho Velho | Trindade - Goiás</title>
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
<script type="text/javascript">
$(function () {
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
        <h1 class="titulo-pagina">Recordes</h1>
        <div class="lista">
          <ul>
            <li>
              <a href="images/_upload/pescadores/01.jpg" rel="album" title="Nome do Pescador">
                <span></span>
                <img src="http://placehold.it/200x150" alt="Nome do Pescador" />
                <strong>Pintado - 18,5 Kg</strong>
                <br />
                <b>Nome do Pescador</b>
                <br />
                Nome da Cidade/UF
              </a>
            </li>
            <li>
              <a href="http://placehold.it/800x600" rel="album" title="Nome do Pescador">
                <span></span>
                <img src="http://placehold.it/200x150" alt="Nome do Pescador" />
                <strong>Pintado - 18,5 Kg</strong>
                <br />
                <b>Nome do Pescador</b>
                <br />
                Nome da Cidade/UF
              </a>
            </li>
            <li>
              <a href="http://placehold.it/800x600" rel="album" title="Nome do Pescador">
                <span></span>
                <img src="http://placehold.it/200x150" alt="Nome do Pescador" />
                <strong>Pintado - 18,5 Kg</strong>
                <br />
                <b>Nome do Pescador</b>
                <br />
                Nome da Cidade/UF
              </a>
            </li>
            <li class="no-margin">
              <a href="http://placehold.it/800x600" rel="album" title="Nome do Pescador">
                <span></span>
                <img src="http://placehold.it/200x150" alt="Nome do Pescador" />
                <strong>Pintado - 18,5 Kg</strong>
                <br />
                <b>Nome do Pescador</b>
                <br />
                Nome da Cidade/UF
              </a>
            </li>
            <li>
              <a href="http://placehold.it/800x600" rel="album" title="Nome do Pescador">
                <span></span>
                <img src="http://placehold.it/200x150" alt="Nome do Pescador" />
                <strong>Pintado - 18,5 Kg</strong>
                <br />
                <b>Nome do Pescador</b>
                <br />
                Nome da Cidade/UF
              </a>
            </li>
            <li>
              <a href="http://placehold.it/800x600" rel="album" title="Nome do Pescador">
                <span></span>
                <img src="http://placehold.it/200x150" alt="Nome do Pescador" />
                <strong>Pintado - 18,5 Kg</strong>
                <br />
                <b>Nome do Pescador</b>
                <br />
                Nome da Cidade/UF
              </a>
            </li>
            <li>
              <a href="http://placehold.it/800x600" rel="album" title="Nome do Pescador">
                <span></span>
                <img src="http://placehold.it/200x150" alt="Nome do Pescador" />
                <strong>Pintado - 18,5 Kg</strong>
                <br />
                <b>Nome do Pescador</b>
                <br />
                Nome da Cidade/UF
              </a>
            </li>
            <li class="no-margin">
              <a href="http://placehold.it/800x600" rel="album" title="Nome do Pescador">
                <span></span>
                <img src="http://placehold.it/200x150" alt="Nome do Pescador" />
                <strong>Pintado - 18,5 Kg</strong>
                <br />
                <b>Nome do Pescador</b>
                <br />
                Nome da Cidade/UF
              </a>
            </li>
          </ul>
        </div>
        <!-- PAGINACAO -->
        <div class="paginacao">
          <a href="" class="anterior" title="Anterior">&nbsp;&nbsp;&nbsp;</a>
          <a href="" title="Página 01">1</a>
          <a href="" title="Página 02">2</a>
          <a href="" title="Página 03" class="atual">3</a>
          <a href="" title="Página 03">4</a>
          <a href="" class="proxima" title="Próxima">&nbsp;&nbsp;&nbsp;</a>
        </div>
    </div><!-- /.content -->	
</section>
<?php require_once('inc_footer.php'); ?>