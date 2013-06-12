<?php

class GuiaController extends Controller
{
	public $layout='guia_layout';

	public function actionIndex()
	{
		$this->render('gastronomiaVinalopo');
	}

	public function actionPlayasElche()
	{
		$this->render('playasElche');
	}
	
	public function actionPlayasAlicante()
	{
		$this->render('playasAlicante');
		
	}
	
	public function actionPlayasVegabaja()
	{
		$this->render('playasVegabaja');
	}
	
	public function actionPlayasBenidorm()
	{
		$this->render('playasBenidorm');
	}
	
	public function actionHotelesAlicante()
	{
		$this->render('hotelesAlicante');
	}
	
	public function actionHotelesElche()
	{
		$this->render('hotelesElche');
	}
	
	public function actionHotelesVinalopo()
	{
		$this->render('hotelesVinalopo');
	}
	
	public function actionHotelesVegabaja()
	{
		$this->render('hotelesVegabaja');
	}
	
	public function actionHotelesBenidorm()
	{
		$this->render('hotelesBenidorm');
	}
	public function actionHotelesElda()
	{
		$this->render('hotelesElda');
	}
	
	public function actionCastillosVinalopo()
	{
		$this->render('castillosVinalopo');
	}
	
	public function actionEscapadasVegabaja()
	{
		$this->render('escapadasVegabaja');
	}
	
	public function actionEscapadasVinalopo()
	{
		$this->render('escapadasVinalopo');
	}
	
	public function actionEscapadasAlcoy()
	{
		$this->render('escapadasAlcoy');
	}
	
	public function actionEscapadasAlicante()
	{
		$this->render('escapadasAlicante');
	}
	
	public function actionEscapadasElche()
	{
		$this->render('escapadasElche');
	}
	
	public function actionEscapadasBenidorm()
	{
		$this->render('escapadasBenidorm');
	}
	
	public function actionEscapadasJavea()
	{
		$this->render('escapadasJavea');
	}
	
	public function actionConexionAve()
	{
		$this->render('conexionAve');
	}
	
	public function actionGolfAlicante()
	{
		$this->render('golfAlicante');
	}
	
	public function actionGolfVegabaja()
	{
		$this->render('golfVegabaja');
	}
	
	
	public function actionGolfVinalopo()
	{
		$this->render('golfVinalopo');
	}
	
	public function actionfiestasElche()
	{
		$this->render('fiestasElche');
	}
	
	public function actionfiestasAlicante()
	{
		$this->render('fiestasAlicante');
	}
	
	public function actionfiestasVegaBaja()
	{
		$this->render('fiestasVegaBaja');
	}
	
	public function actionfiestasVinalopo()
	{
		$this->render('fiestasVinalopo');
	}
		
	public function actiongastronomiaProvincia()
	{
		$this->render('gastronomiaProvincia');
	}
	
	public function actiongastronomiaVegaBaja()
	{
		$this->render('gastronomiaVegabaja');
	}
	
	public function actiongastronomiaVinalopo()
	{
		$this->render('gastronomiaVinalopo');
	}
	
	public function actionTurismoRural()
	{
		$this->render('turismoRural');
	}
	
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
*/
	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			//'action1'=>'path.to.ActionClass',
			//'action2'=>array(
		//		'class'=>'path.to.AnotherActionClass',
		//		'propertyName'=>'propertyValue',
		//	),
			'page'=>array(
            'class'=>'CViewAction',
        ),
		);
	}
	
}