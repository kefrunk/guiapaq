<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<style>
#comarcas {list-style-type:none; margin-left: 20px; margin-bottom:50px; padding:0}
#comarcas li {float:left; margin-right:30px; font-weight:bold; font-size:20px;}
#comarcas a:hover{background-color:#11AA11 ;}
#comarcas a{background-color: white ; color: #AA1111}
#activa a{background-color: yellow; color: #AA1111}}
</style>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<div id="main" role="main">
<ul id="comarcas">
    			<li id="activa"><a href="index.php?c=elche">Elche y Comarca</a></li>
    			<li ><a  href="index.php?c=alicante">Alicante</a></li>
	   			<li><a  href="index.php?c=vegabaja">Vega Baja</a></li>
    			<li><a  href="index.php?c=vinalopo">Vinalopo Medio y Alto</a></li>
    			</ul>
				
				<?php
				$comarca= $_GET['c'];
					if($comarca=="alicante") $comarcaframe="frameAlicante.php";
					else if($comarca=="vegabaja") $comarcaframe="frameVegaBaja.php";
					else if($comarca=="vinalopo") $comarcaframe="frameVinalopo.php";
					else $comarcaframe="frameElche.php";
				?>
				<IFRAME name="iframe" src="<?php echo $comarcaframe?>" width=680 height=300 marginwidth=0 marginheight=0 hspace=0 vspace=0 frameborder=0 scrolling="auto"></IFRAME>;
				

<div>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

