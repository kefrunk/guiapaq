<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="es"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="es"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" charset="utf-8" />
	<meta name="language" content="es" />
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="/css/style24052013.css">
    <meta name="viewport"  content="width=device-width,  minimum-scale=1.0, maximum-scale=1.0" />

    <script src="/js/vendor/modernizr-2.5.3.min.js"></script>
		
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<script type="text/javascript" src="/js/simpletreemenu.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/paquito/jui.custom.css" />
</head>



<body class="guia">

	<div class="wrap">
		<div id="headerWrapper">
			<a id="logo" href="/site/index">Paquito Rentacar</a>      
			<header>
            <nav>
			<?php $this->widget('zii.widgets.CMenu',array(
				'items'=>array(
					array('label'=>'Condiciones', 'url'=>array('/site/condiciones')),
					array('label'=>'Traducciones(de)', 'url'=>array('/site/traducciones_de')),
					array('label'=>'Traducciones(fr)', 'url'=>array('/site/traducciones_fr')),
				),
			)); ?>
			
			
			</nav>

			<ul id="idiomas" class="de">
			  <?php 
			  $controllerId=$this->getId();
			  $actionId = $this->getAction()->getId();
			  ?>
			  <li><?php echo CHtml::link('español', array('index.php/es/'.$controllerId.'/'.$actionId), array('class' => 'es'));?></li>
			  <li><?php echo CHtml::link('english', array('index.php/en/'.$controllerId.'/'.$actionId), array('class' => 'en'));?></li>
			  <li><?php echo CHtml::link('français', array('index.php/fr/'.$controllerId.'/'.$actionId), array('class' => 'fr'));?></li>
			  <li><?php echo CHtml::link('deutsch', array('index.php/de/'.$controllerId.'/'.$actionId), array('class' => 'de'));?></li>		  
			</ul>
			</header>
		</div>
		
		

		<div id="wrapper">
			<div id="contentWrapper">
				<aside id="sidebar">
				<div id="nav_guia">		
				<p> &nbsp;</p>
				<ul id="treemenu2" class="treeview">
				
				<li>+ Hoteles y Restaurantes
					<ul>
						<li><?php echo CHtml::link('-Hoteles y Restaurantes en Alicante', array('index.php/guia/hotelesAlicante'), array('class' => 'enlacetipo1'));?></li>
						<li><?php echo CHtml::link('-Hoteles en Benidorm', array('index.php/guia/hotelesBenidorm'), array('class' => 'enlacetipo1'));?></li>
						<li><?php echo CHtml::link('-Hoteles y Restaurantes en Elche', array('index.php/guia/hoteleselche'), array('class' => 'enlacetipo1'));?></li>
						<li><?php echo CHtml::link('-Hoteles y Restaurantes en Orihuela', array('index.php/guia/hotelesvegabaja'), array('class' => 'enlacetipo1'));?></li>
						<li><?php echo CHtml::link('-Hoteles y Restaurantes zona Elda', array('index.php/guia/hotelesElda'), array('class' => 'enlacetipo1'));?></li>
					</ul>
				</li>
				<li>+ Turismo Rural y Campings
					<ul>
					<li><?php echo CHtml::link('-Turismo Rural Provincia', array('index.php/guia/turismorural'), array('class' => 'enlacetipo1'));?></li>
					</ul>
				</li>
				<li>+ Conexion AVE
					<ul>
					<li><?php echo CHtml::link('-LAV Madrid-Levante<br>Villena<br>Alicante', array('index.php/guia/conexionAve'), array('class' => 'enlacetipo1'));?></li>			
		</a></li>
					</ul>
				</li>
				<li>+ Guia Gastronomica
					<ul>
						<li><?php echo CHtml::link('-Guía Gastronómica Vega Baja', array('index.php/guia/gastronomiaVegaBaja'), array('class' => 'enlacetipo1'));?></li>
						<li><?php echo CHtml::link('-Guía Gastronómica Alicante', array('index.php/guia/gastronomiaProvincia'), array('class' => 'enlacetipo1'));?></li>
						<li><?php echo CHtml::link('-Guía Gastronómica Vinalopo', array('index.php/guia/gastronomiaVinalopo'), array('class' => 'enlacetipo1'));?></li>
					</ul>
				</li>
				<li>+ Playas
					<ul>
					<li><?php echo CHtml::link('-Playas en Alicante', array('index.php/guia/playasAlicante'), array('class' => 'enlacetipo1'));?></li>
					<li><?php echo CHtml::link('-Playas en Benidorm', array('index.php/guia/playasBenidorm'), array('class' => 'enlacetipo1'));?></li>
					<li><?php echo CHtml::link('-Playas en Elche/Santa Pola', array('index.php/guia/playasElche'), array('class' => 'enlacetipo1'));?></li>
					<li><?php echo CHtml::link('-Playas en Bajo Segura', array('index.php/guia/playasvegabaja'), array('class' => 'enlacetipo1'));?></li>
					</ul>
				</li>
				
				<li>+ Escapadas
					<ul>
					<li><?php echo CHtml::link('-Escapadas Alicante', array('index.php/guia/escapadasAlicante'), array('class' => 'enlacetipo1'));?></li>
					<li><?php echo CHtml::link('-Escapadas Elche', array('index.php/guia/escapadasElche'), array('class' => 'enlacetipo1'));?></li>
					<li><?php echo CHtml::link('-Orihuela y Torrevieja', array('index.php/guia/escapadasVegabaja'), array('class' => 'enlacetipo1'));?></li>
					<li><?php echo CHtml::link('-Escapadas Benidorm', array('index.php/guia/escapadasBenidorm'), array('class' => 'enlacetipo1'));?></li>
					<li><?php echo CHtml::link('-Calpe-Javea-Denia', array('index.php/guia/escapadasJavea'), array('class' => 'enlacetipo1'));?></li>
					<li><?php echo CHtml::link('-Castillos del Vinalopó', array('index.php/guia/castillosvinalopo'), array('class' => 'enlacetipo1'));?></li>
					<li><?php echo CHtml::link('-Jijona-Alcoy-Ibi', array('index.php/guia/escapadasAlcoy'), array('class' => 'enlacetipo1'));?></li>
					<li><?php echo CHtml::link('-Escapadas Zona Elda', array('index.php/guia/escapadasVinalopo'), array('class' => 'enlacetipo1'));?></li>
					</ul>
				</li>
				
				<li>+ Fiestas
					<ul>
					<li><?php echo CHtml::link('-Fiestas en Alicante', array('index.php/guia/fiestasalicante'), array('class' => 'enlacetipo1'));?></li>
					<li><?php echo CHtml::link('-Fiestas en Elche', array('index.php/guia/fiestaselche'), array('class' => 'enlacetipo1'));?></li>
					<li><?php echo CHtml::link('-Fiestas en Vega Baja', array('index.php/guia/fiestasvegabaja'), array('class' => 'enlacetipo1'));?></li>
					<li><?php echo CHtml::link('-Fiestas en Elda y Petrer', array('index.php/guia/fiestasVinalopo'), array('class' => 'enlacetipo1'));?></li>
					</ul>
				</li>
				
				<li>+ Golf
					<ul>
					<li><?php echo CHtml::link('-Golf en Alicante', array('index.php/guia/golfAlicante'), array('class' => 'enlacetipo1'));?></li>
					<li><?php echo CHtml::link('-Golf en Vinalopo', array('index.php/guia/golfVinalopo'), array('class' => 'enlacetipo1'));?></li>
					<li><?php echo CHtml::link('-Golf en Vega Baja', array('index.php/guia/golfvegabaja'), array('class' => 'enlacetipo1'));?></li>
					</ul>
				</li>

				</ul>

				<script type="text/javascript">
				ddtreemenu.createTree("treemenu2", true)
				</script>
				<p>&nbsp;&nbsp;</p>
				</div>
				</aside>
				
				
				<div id="main" role="main">
					<?php echo $content; ?>
					<p>&nbsp;&nbsp;</p>
					<p>&nbsp;&nbsp;</p>
				</div>
			</div>
		</div>
	



		<div id="footer_fix">
		</div>
	</div>

	<footer>
		<p>Copyright &copy; <?php echo date('Y'); ?> by My Company.	All Rights Reserved.<p>
	</footer><!-- footer -->


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.7.2.min.js"><\/script>')</script>
    <script>
    Modernizr.load([
    {
        test: Modernizr.mq('only all'),
        nope: '/js/vendor/respond.min.js',
    },
{
    test: Modernizr.lastchild,
    nope: '/js/vendor/selectivizr-min.js'
}
    ]);

    $(document).ready(function(){
            $(".mobile-nav select").change(function(){
                window.location = $(this).val();
            });
        });
    </script>

</body>
</html>
