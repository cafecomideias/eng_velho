<?php
$pagina = "pescadores";
require_once('inc_head.php');
?>
<title>Pescadores - Clube de Pesca Engenho Velho | Trindade - Goiás</title>
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
<script type="text/javascript">
$(function () {
	//RANKING
	$('.ranking').cycle({
		fx:     'scrollHorz',
		prev:   '#prev-r',
		next:   '#next-r',
		speed: 300,
		timeout: 0
	});
	//RECORDES
	$('.recordes').cycle({
		fx:     'scrollHorz',
		prev:   '#prev-re',
		next:   '#next-re',
		speed: 300,
		timeout: 0
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
        <h1 class="titulo-pagina">Pescadores</h1>
        <div class="row-one">
        	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam condimentum ut enim et vestibulum. Aenean a orci rutrum, sodales risus ut, gravida diam. Curabitur vitae nunc suscipit sapien ultrices adipiscing. Vestibulum vitae congue risus, ut suscipit mi. Maecenas pellentesque ipsum et metus vehicula tincidunt. Vestibulum sit amet augue tempus, iaculis ipsum sit amet, congue felis. Sed semper vehicula dui at cursus. Pellentesque porta vel velit non accumsan. Nam lacinia feugiat mi, nec mollis diam blandit sed. Vestibulum vel quam eu augue congue rhoncus. Sed lectus magna, bibendum eu malesuada at, tincidunt at metus. Proin lacinia orci nunc, at dignissim leo egestas in. Praesent id quam vel elit adipiscing tincidunt a non sapien. Proin a cursus arcu, non blandit erat.
        <br><br>
        Nullam gravida, sem eu sollicitudin placerat, purus risus ornare elit, ac faucibus nibh felis et lorem. Quisque tempor erat eget odio scelerisque, a bibendum ligula malesuada. Praesent laoreet, mauris nec vestibulum ornare, massa neque rhoncus sem, vitae eleifend est magna vel nisl. In sollicitudin sollicitudin eros, eget sollicitudin odio gravida sit amet. Aenean faucibus lobortis arcu sit amet tristique. Vestibulum commodo ornare facilisis. Aenean non odio et velit sollicitudin ornare sit amet eget tellus. Fusce dictum rutrum est.
        <br><br>
        Aliquam rhoncus interdum dapibus. Morbi in porta eros. Proin sodales diam diam, in auctor nisi rhoncus vitae. Quisque nec augue et sem convallis vehicula ac ut erat. Pellentesque ornare at lectus euismod iaculis. Proin arcu arcu, pulvinar id massa ac, imperdiet aliquam neque. Nunc dapibus leo enim, eu ullamcorper nibh eleifend quis. Morbi purus neque, facilisis eget suscipit id, volutpat eget neque. Vestibulum euismod vestibulum libero, in varius massa facilisis sit amet. Sed mollis, libero quis volutpat pellentesque, felis justo adipiscing nibh, nec accumsan eros arcu quis diam. Cras fringilla rutrum lectus, vitae placerat enim suscipit sed. Curabitur sed nibh urna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus quis blandit nisl.
            <div class="clear"><br><br></div>
            <h3>Meus Recordes</h3>
            <!-- barra -->
            <div class="barra"></div>
            <a href="javascript:void(0);" class="prev2" id="prev-re" title="Anteriores">Anteriores</a>
          	<div class="recordes">
                <ul>
                    <li><img src="http://placehold.it/200x150" /><br>Pintado - 18,5 Kg</li>
                    <li><img src="http://placehold.it/200x150" /><br>Pintado - 12 Kg</li>
                    <li><img src="http://placehold.it/200x150" /><br>Surubin - 10,2 Kg</li>
                </ul>
                <ul>
                    <li><img src="http://placehold.it/200x150" /><br>Caranha - 22,1 Kg</li>
                    <li><img src="http://placehold.it/200x150" /><br>Pirarucu - 7,5 Kg</li>
                    <li><img src="http://placehold.it/200x150" /><br>Tucunaré - 19 Kg</li>
                </ul>
                <ul>
                    <li><img src="http://placehold.it/200x150" /><br>Pintado - 18,5 Kg</li>
                    <li><img src="http://placehold.it/200x150" /><br>Caranha - 22,1 Kg</li>
                    <li><img src="http://placehold.it/200x150" /><br>Pintado - 18,5 Kg</li>
		        </ul>
            </div>
    	    <a href="javascript:void(0);" class="next2" id="next-re" title="Próximas">Próximas</a>
        </div>
        <div class="row-two">
        	<h2 class="sub-titulo">Alberto Mariano da Silva</h2>
            <span class="foto"><img src="images/_upload/pescadores/p1.jpg" width="200" height="262" alt="Nome do Pescador" /></span>
            <p>
            	Nome da Cidade/UF
            	<br /><br /><br />
            </p>
            <h3>Ranking</h3>
            <!-- barra -->
            <div class="barra"></div>
            <a href="javascript:void(0);" class="prev" id="prev-r" title="Anteriores">Anteriores</a>
          	<ul class="ranking">
          	    <li>
                    <strong>1º Trimestre 2013</strong>
                    <p>5º</p>
                    colocado
                </li>
                <li>
                    <strong>4º Trimestre 2012</strong>
                    <p>12º</p>
                    colocado
                </li>
                <li>
                    <strong>3º Trimestre 2012</strong>
                    <p>2º</p>
                    colocado
                </li>
		    </ul>
    	    <a href="javascript:void(0);" class="next" id="next-r" title="Próximas">Próximas</a>
        </div>
    </div><!-- /.content -->	
</section>
<?php require_once('inc_footer.php'); ?>