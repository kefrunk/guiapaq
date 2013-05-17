<?php

class GuiaController extends Controller
{
	public function actionAlicante()
	{
		$this->render('alicante');
	}

	public function actionElche()
	{
		$this->render('elche');

	}

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionVegabaja()
	{
		$this->render('vegabaja');
	}

	public function actionVinalopo()
	{
		$this->render('vinalopo');
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
	
	public function actionInfoAlicante()
	{
		$this->render('infoAlicante');
	}
	
	public function actionInfoElche()
	{
		$this->render('infoElche');
	}
	
	public function actioninfoVinalopo()
	{
		$this->render('infoVinalopo');
	}
	
	public function actionInfoVegabaja()
	{
		$this->render('infoVegabaja');
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
		$this->render('sscapadasVinalopo');
	}
	
	public function actionEscapadasAlicante()
	{
		$this->render('escapadasAlicante');
	}
	
	public function actionEscapadasElche()
	{
		$this->render('escapadasElche');
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