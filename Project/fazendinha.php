<?php
$pagina = "fazendinha";
require_once('inc_head.php');
require_once '../Di/Container.php'; 
$di = new Container();

?>
<title>Fazendinha - Clube de Pesca Engenho Velho | Trindade - Goiás</title>
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
        <h1 class="titulo-pagina">Fazendinha</h1>
        <div class="one">
          <strong>Passeios</strong>
		  <br>
          Já estão sendo realizados novos passeios com os moradores da nossa Fazendinha. Venha se divertir com essa atração do Engenho Velho!!!
		  <br><br>
          <strong>Reinauguração!!!</strong> 
		  <br>
          A fazendinha está reinaugurada!<br>
          Façam uma visita!
		  <br><br>
          <strong>Reformas!!!!</strong>
          <br>
			Prezados Clientes,
			<br>Nossa fazendinha está em reformas para melhor atendê-los.
			<br>Caso queiram ver os animais de perto entre em contato com o atendimento da recepção para saber a localização dos animais!!!
			Agradecemos a atenção de todos!
          <br><br>
          <strong>Não percam!</strong>
          <br>
		  Venham conhecer nossa Fazendinha!
          <br>
		  Os visitantes do Engenho Velho já podem contar com a presença ilustre de vários animais, fazer um delicioso passeio de charrete e ainda apreciar nosso museu de antiguidades.
          <br>
          Venha conferir, nós preparamos essa novidade com muito carinho para você e sua família!
        </div>
        <div class="two">
          <a href="javascript:void(0);" class="prev" id="demo5-backward" title="Anteriores">Anteriores</a>
          <div id="demo5" class="scroll-img">
          	<ul>
            	<li><a href="http://jquery.malsup.com/cycle2/images/beach1.jpg" rel="album" title="Ampliar"><img src="http://jquery.malsup.com/cycle2/images/beach1.jpg" /></a></li>
                <li><a href="http://jquery.malsup.com/cycle2/images/beach2.jpg" rel="album" title="Ampliar"><img src="http://jquery.malsup.com/cycle2/images/beach2.jpg" /></a></li>
                <li><a href="http://jquery.malsup.com/cycle2/images/beach3.jpg" rel="album" title="Ampliar"><img src="http://jquery.malsup.com/cycle2/images/beach3.jpg" /></a></li>
                <li><a href="http://jquery.malsup.com/cycle2/images/beach4.jpg" rel="album" title="Ampliar"><img src="http://jquery.malsup.com/cycle2/images/beach4.jpg" /></a></li>
                <li><a href="http://jquery.malsup.com/cycle2/images/beach5.jpg" rel="album" title="Ampliar"><img src="http://jquery.malsup.com/cycle2/images/beach5.jpg" /></a></li>
                <li><a href="http://jquery.malsup.com/cycle2/images/beach6.jpg" rel="album" title="Ampliar"><img src="http://jquery.malsup.com/cycle2/images/beach6.jpg" /></a></li>
                <li><a href="http://jquery.malsup.com/cycle2/images/beach7.jpg" rel="album" title="Ampliar"><img src="http://jquery.malsup.com/cycle2/images/beach7.jpg" /></a></li>
                <li><a href="http://jquery.malsup.com/cycle2/images/beach8.jpg" rel="album" title="Ampliar"><img src="http://jquery.malsup.com/cycle2/images/beach8.jpg" /></a></li>
                <li><a href="http://jquery.malsup.com/cycle2/images/beach9.jpg" rel="album" title="Ampliar"><img src="http://jquery.malsup.com/cycle2/images/beach9.jpg" /></a></li>
    		</ul>
		  </div>
    	  <a href="javascript:void(0);" class="next" id="demo5-forward" title="Próximas">Próximas</a>
        </div>
    </div><!-- /.content -->	
</section>
<?php require_once('inc_footer.php'); ?>