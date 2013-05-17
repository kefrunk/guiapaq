<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/tab-panel.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/guia.css" />
	<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/tab-panel.js.css"></script>
</head>
<body onload="bodyOnLoad()" onResize="raisePanel(currentMenuIndex)">


<ul id="comarcas">
    			<li id="activa"><a href="<?php echo Yii::app()->request->baseUrl; ?>?r=guia/<?php echo "elche"?>"><?php echo Yii::t('guia', 'elchetitulo'); ?></</a></li>
    			<li ><a  href="<?php echo Yii::app()->request->baseUrl; ?>?r=guia/<?php echo "alicante"?>">Alicante</a></li>
	   			<li><a  href="<?php echo Yii::app()->request->baseUrl; ?>?r=guia/<?php echo "vegabaja"?>">Vega Baja</a></li>
    			<li><a  href="<?php echo Yii::app()->request->baseUrl; ?>?r=guia/<?php echo "vinalopo"?>"><?php echo Yii::t('guia', 'vinalopotitulo'); ?></</a></li>
    			</ul>
<!-- ========================= BEGIN of tabbed-frame div ======================== -->

					<div id="tabFrame" height="700px">
					
							<div id="tabMenuDiv">
							<span class="tabMenu" id="tabMenu0" onClick="return raisePanel(0)" onMouseOver="mouseOver(0)" onMouseOut="mouseOut(0)" >
							   Escapadas</span>
							<span class="tabMenu" id="tabMenu1" onClick="return raisePanel(1)" onMouseOver="mouseOver(1)" onMouseOut="mouseOut(1)">
							   Oficinas</span>
							<span class="tabMenu" id="tabMenu2" onClick="return raisePanel(2)" onMouseOver="mouseOver(2)" onMouseOut="mouseOut(2)">
							   Playas</span>
							<span class="tabMenu" id="tabMenu3" onClick="return raisePanel(3)" onMouseOver="mouseOver(3)" onMouseOut="mouseOut(3)">
							   Informaci&oacute;n sobre Elche</span>
							</div>
						
							<div class="tabPane" id="tabPane0">
							<IFRAME name="iframe" src="<?php echo Yii::app()->request->baseUrl; ?>?r=guia/pages/escapadasElche.php" width=675 height="100%" marginwidth=0 marginheight=0 hspace=0 vspace=0 frameborder=0 scrolling="auto"></IFRAME>
							</div>
						
							<div class="tabPane" id="tabPane1">
							<IFRAME name="iframe" src="infoElche.php" width=675 height="100%" marginwidth=0 marginheight=0 hspace=0 vspace=0 frameborder=0 scrolling="auto"></IFRAME>
							</div>
						
							
							<div class="tabPane" id="tabPane2">
							<IFRAME name="iframe" src="playasElche.php" width=675 height="100%" marginwidth=0 marginheight=0 hspace=0 vspace=0 frameborder=0 scrolling="auto"></IFRAME>
							</div>
							
							<div class="tabPane" id="tabPane3">
							<IFRAME name="iframe" src="golfElche.php" width=675 height="100%" marginwidth=0 marginheight=0 hspace=0 vspace=0 frameborder=0 scrolling="auto"></IFRAME>
							</div>
							
							<div id="tabFiller" ></div>
					
				<!-- ========================= end of tabbed-frame div ======================== -->
				
				</body>
				</html>