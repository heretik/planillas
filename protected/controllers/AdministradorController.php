<?php

class AdministradorController extends GxController {


	public function filters()
	{
		return array(
				'rights', // perform access control for CRUD operations
		);
	}
	
	public function accessRules()
	{
		return array(
				array('allow',  // allow all users to perform 'index' and 'view' actions
						'actions'=>array('index','view','selectdos','selecttres','selectnivel,calcula,confirmar'),
						'users'=>array('*'),
				),
				array('allow', // allow authenticated user to perform 'create' and 'update' actions
						'actions'=>array('create','update'),
						'users'=>array('@'),
				),
				array('allow', // allow admin user to perform 'admin' and 'delete' actions
						'actions'=>array('admin','delete'),
						'users'=>array('admin'),
				),
				array('deny',  // deny all users
						'users'=>array('*'),
				),
		);
	}
	
	public function actionView($id) {
		$model = $this->loadModel($id, 'Planilla');
		
		if ($model->id_tipo_planilla == 1){$this->redirect(array('inicial/view', 'id'=>$model->id_planilla));}
		if ($model->id_tipo_planilla == 5){$this->redirect(array('egb/view', 'id'=>$model->id_planilla));}
		if ($model->id_tipo_planilla == 6){$this->redirect(array('secundariopolimodal/view', 'id'=>$model->id_planilla));}
		if ($model->id_tipo_planilla == 4){$this->redirect(array('noformal/view', 'id'=>$model->id_planilla));}
		if ($model->id_tipo_planilla == 3){$this->redirect(array('serviciocomplementario/view', 'id'=>$model->id_planilla));}
		if ($model->id_tipo_planilla == 2){$this->redirect(array('adulto/view', 'id'=>$model->id_planilla));}
		
		/*$this->render('view', array(
			'model' => $this->loadModel($id, 'Planilla'),
		));*/
	}

	public function actionViewEst($id) {

		$this->render('viewest', array(
		 'model' => $this->loadModel($id, 'Establecimiento'),
		));
	}
	
	public function actionCreate() {
		Yii::import('ext.multimodelform.MultiModelForm');
		
		$id=Yii::app()->user->id;
		
		$establecimientousuario = UsuEstPla::model()->find('id_usuario = :id_uno',array(':id_uno'=>$id));
		$establecimiento = Establecimiento::model()->find('id_establecimiento = :id_uno',array(':id_uno'=>Yii::app()->getSession()->get('id_establecimiento')));
        $responsable = Responsable::model()->find('id_responsable = :id_est', array(':id_est'=>$establecimiento->id_responsable));
		
        $model = new Planilla('adulto');
        $model->confirmado = false ;
        
		$detallePlanilla = new Adulto;
		
		$validatedDetalles = array();  
		/*
		echo "<PRE>";
		print_r($_POST);
		echo "</PRE>";*/

		if(isset($_POST['Planilla']))
		{
			$model->id_establecimiento=Yii::app()->getSession()->get('id_establecimiento');
			$model->mes= Yii::app()->getSession()->get('mesvigente');
			$model->anio= Yii::app()->getSession()->get('aniovigente');
			$model->id_tipo_planilla=2;
			$model->alu_tot_ind = $_POST['Planilla']['alu_tot_ind'];
			$model->tot_ind_alf = $_POST['Planilla']['tot_ind_alf'] ;
			$model->tot_ind_pri =$_POST['Planilla']['tot_ind_pri'] ;
			$model->tot_ind_sec =$_POST['Planilla']['tot_ind_sec'];
			$model->alu_tot_mul =$_POST['Planilla']['alu_tot_mul'] ;
			$model->tot_mul_alf =$_POST['Planilla']['tot_mul_alf'] ;
			$model->tot_mul_pri =$_POST['Planilla']['tot_mul_pri'] ;
			$model->tot_mul_sec =$_POST['Planilla']['tot_mul_sec'] ;
			$model->alu_mul_ind =$_POST['Planilla']['alu_mul_ind'] ;
			$model->alu_tot_alf =$_POST['Planilla']['alu_tot_alf'] ;
			$model->alu_tot_pri =$_POST['Planilla']['alu_tot_pri'] ;
			$model->alu_tot_sec =$_POST['Planilla']['alu_tot_sec'] ;
			$model->tot_ind_pol =$_POST['Planilla']['tot_ind_pol'] ;
			$model->tot_mul_pol =$_POST['Planilla']['tot_mul_pol'] ;
			$model->alu_tot_pol =$_POST['Planilla']['alu_tot_pol'] ;
			$model->ingresador =$_POST['Planilla']['ingresador'] ;
			$model->confirmado = 0 ;
			
			$detailOK = MultiModelForm::validate($detallePlanilla,$validatedDetalles,$deleteItems);

			if ($detailOK && empty($validatedDetalles))
			{
				//Yii::app()->user->setFlash('error','No detail submitted');
				Yii::app()->user->setFlash('error', '<strong>Planilla vacia!</strong> Debe agregar filas.');
				$detailOK = false;
			}

			if(
			    $detailOK &&
				$model->save()
				)
			{
				//the value for the foreign key 'groupid'
				$masterValues = array ('id_planilla'=>$model->id_planilla);

				if (MultiModelForm::save($detallePlanilla,$validatedDetalles,$deleteItems,$masterValues))
					$this->redirect(array('admin','id'=>$model->id_planilla));
			}
		}
     
		$this->render('create',array(
			'model'=>$model,
			'detallePlanilla'=>$detallePlanilla,
			'validatedDetalles' => $validatedDetalles,
			'establecimiento' => $establecimiento,
		    'responsable'=>	$responsable
		));
	}

	public function actionUpdate($id)
	{
		
		$model=$this->loadModel($id,'Planilla');
		
		if ($model->id_tipo_planilla == 1){
			$this->redirect(array('inicial/update', 'id'=>$model->id_planilla));
		}
		if ($model->id_tipo_planilla == 5){
			$this->redirect(array('egb/update', 'id'=>$model->id_planilla));
		}
		if ($model->id_tipo_planilla == 6){
			$this->redirect(array('secundariopolimodal/update', 'id'=>$model->id_planilla));
		}
		if ($model->id_tipo_planilla == 4){
			$this->redirect(array('noformal/update', 'id'=>$model->id_planilla));
		}
		if ($model->id_tipo_planilla == 3){
			$this->redirect(array('serviciocomplementario/update', 'id'=>$model->id_planilla));
		}
		if ($model->id_tipo_planilla == 2){
			$this->redirect(array('adulto/update', 'id'=>$model->id_planilla));
		}
			
	}

	public function actionDelete($id) {
		if (Yii::app()->getRequest()->getIsPostRequest()) {
			$this->loadModel($id, 'Planilla')->delete();

			if (!Yii::app()->getRequest()->getIsAjaxRequest())
				$this->redirect(array('admin'));
		} else
			throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
	}

	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Planilla');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	public function actionAdmin() {
		$model = new Planilla('search');
		$model->unsetAttributes();

		if (isset($_GET['Planilla']))
			$model->setAttributes($_GET['Planilla']);

		$this->render('admin', array(
			'model' => $model,
		));
	}
	
	public function actionAdminLoc() {
		$model = new Planilla('search');
		$model->unsetAttributes();
	
		if (isset($_GET['Planilla']))
			$model->setAttributes($_GET['Planilla']);
	
		$this->render('adminloc', array(
				'model' => $model,
		));
	}
	
	public function actionAdminEst() {
		$model = new Planilla('search');
		$model->unsetAttributes();
	
		if (isset($_GET['Planilla']))
			$model->setAttributes($_GET['Planilla']);
	
		$this->render('adminest', array(
				'model' => $model,
		));
	}

	public function actionSelectdos()
	{
		$id_uno = $_POST['Planilla']['id_localizacion'];
		$lista = LocalizacionPlanilla::model()->find('id_localizacion = :id_uno',array(':id_uno'=>$id_uno));
	/*
		$lista = LocalizacionPlanilla::model()->findAll(array(
				'select'=>'d.id_tipo_planilla, d.descripcion',
				'condition'=>"id_localizacion = '$id_uno'",
				'join'=>'INNER JOIN tipo_planilla d ON d.id_tipo_planilla = t.id_tipo_planilla'));
	*/
		$lista = TipoPlanilla::model()->findAll(array(
				'select'=>'t.id_tipo_planilla, t.descripcion',
				'condition'=>"l.id_localizacion = '$id_uno'",
				'join'=>'INNER JOIN localizacion_planilla as l on t.id_tipo_planilla=l.id_tipo_planilla'));
		
		$lista = CHtml::listData($lista,'id_tipo_planilla','descripcion');
	
		echo CHtml::tag('option', array('value' => ''), 'Seleccione', true);
	
		foreach ($lista as $valor => $descripcion){
			echo CHtml::tag('option',array('value'=>$valor),CHtml::encode($descripcion), true );
	
		}
	}
	
	public function actionTest(){
		$idu=Yii::app()->user->id;
		$model = new Planilla;
		$establecimientousuario = UsuarioEstablecimiento::model()->find('id_usuario = :id_uno',array(':id_uno'=>$idu));
		$establecimiento = Establecimiento::model()->find('id_establecimiento = :id_uno',array(':id_uno'=>Yii::app()->getSession()->get('id_establecimiento')));
		
		$id = $_POST['Planilla']['id_tipo_planilla'];
		if ($id == 2) {	
		
		$sql="select id_nivel, id_sala_ciclo_anio, id_turno, id_seccion, id_orientacion, 
			  alu_mat_tot, alu_mat_var, alu_mat_muj, nec_esp_edu ";
	
		$DetallePlanilla = 	TipoPlanilla::model()->findAll();
	
		$model=new DetallePlanilla();
		
		//create an array with one model Pogo
		$data = array($model);
	
			$this->renderPartial('_secciones', array(
					'model'=>$model,
					'data'=>$data,
					'establecimiento' => $establecimiento
				  
			));
		
		echo "</table>";
	 }	else 
	 {		$model=new DetallePlanilla();
		
		//create an array with one model Pogo
		$data = array($model);
	 	$this->renderPartial('_servcomp',array(
					'data'=>$data,
			));
	 }
	}
	
	public function actionSelectnivel()
	{/*
		echo "<PRE>";
		print_r($_POST);
		echo "</PRE>";	$id_uno = $id;*/
		$id_uno = $_POST['id'];
	
		//$lista = SalaCicloAnio::model()->find('id_nivel = :id_uno',array(':id_uno'=>$id_uno));
		
		$lista = SalaCicloAnio::model()->findAll(array(
				'select'=>'t.id_sala_ciclo_anio, t.descripcion',
				'condition'=>"t.id_nivel = '$id_uno'"));
		
		$lista = CHtml::listData($lista,'id_sala_ciclo_anio','descripcion');
	
		echo CHtml::tag('option', array('value' => ''), 'Seleccione', true);
	
		foreach ($lista as $valor => $descripcion){
			echo CHtml::tag('option',array('value'=>$valor),CHtml::encode($descripcion), true );
	
		}
	}
	
	public function actionCalcula() {
		/*echo "<PRE>";
		print_r($_POST);
		echo "</PRE>";*/
		
		$total = $_POST['alu_mat_tot'];
		$varones = $_POST['alu_mat_var'];
		
		$mujeres = $total - $varones;
		
		$_POST['alu_mat_muj'] = $mujeres;
		echo $mujeres;
	}
	
	public function actionAjax()
	{
				
		$DetallePlanilla = 	TipoPlanilla::model()->findAll();
		// do what you have to do
		$this->renderPartial('_secciones',
				array(
					'model' => $DetallePlanilla,));
	}
	
	// on your controller
	// example code for action rendering the relational data
	public function actionRelational()
	{
			$id = Yii::app()->getRequest()->getParam('id');
	        $this->renderPartial('_relation', array(
	            'id' => $id,
				'gridDataProvider' => DetallePlanilla::model()->getGridDataProvider($id),
				'gridColumns' => $this->getGridColumns()
		));
	}
	
		
	public function getGridColumns(){
		
		 $gridColumns = array(
		 array(
			'header'=>'Nivel',
			'name'=>'id_nivel',
			'value'=>'GxHtml::valueEx($data->idNivel)',
			'filter'=>GxHtml::listDataEx(NivelServicio::model()->findAllAttributes(null, true)),
			),
		array(
			'header'=>'Sala/Ciclo/Año',
			'name'=>'id_sala_ciclo_anio',
			'value'=>'GxHtml::valueEx($data->idSalaCicloAnio)',
			'filter'=>GxHtml::listDataEx(SalaCicloAnio::model()->findAllAttributes(null, true)),
			),
        array(
			'name'=>'id_turno',
			'value'=>'GxHtml::valueEx($data->idTurno)',
			'filter'=>GxHtml::listDataEx(Turno::model()->findAllAttributes(null, true)),
			),
		array(
			'name'=>'id_seccion',
			'value'=>'GxHtml::valueEx($data->idSeccion)',
			'filter'=>GxHtml::listDataEx(Seccion::model()->findAllAttributes(null, true)),
			),
		array(
			'name'=>'id_orientacion',
			'value'=>'GxHtml::valueEx($data->idOrientacion)',
			'filter'=>GxHtml::listDataEx(Orientacion::model()->findAllAttributes(null, true)),
			'footer'=>'Total Alumnos'),
		
		array(
			'name'=>'alu_mat_tot',
	    	'header'=>'Total Alumnos',
			'class'=>'bootstrap.widgets.TbTotalSumColumn'
		),
		array(
			'name'=>'alu_mat_var',
			'header'=>'Total Varones',
		),
		array(
			'name'=>'alu_mat_muj',
	    	'header'=>'Total Mujeres',
		),
		/*
		'alu_mat_tot',
		'alu_mat_var',
		'alu_mat_muj',
		'alu_rep_tot',
		'alu_rep_var',
		'alu_rep_muj',
		'nec_esp_edu',
		'alu_ser_tot',
		'alu_ser_var',
		'alu_ser_muj',
		'alu_obl_tot',
		'alu_obl_var',
		'alu_obl_muj',
		'alu_opt_tot',
		'alu_opt_var',
		'alu_opt_muj',
		array(
			'name'=>'id_turno',
			'value'=>'GxHtml::valueEx($data->idTurno)',
			'filter'=>GxHtml::listDataEx(Turno::model()->findAllAttributes(null, true)),
			),*/
	
		 		);
		 return $gridColumns;
		 	
	}
	

	public function actionAdulto() {
		
		Yii::import('ext.multimodelform.MultiModelForm');
		
		$id=Yii::app()->user->id;
	
		$establecimientousuario = UsuEstPla::model()->find('id_usuario = :id_uno',array(':id_uno'=>$id));
		$establecimiento = Establecimiento::model()->find('id_establecimiento = :id_uno',array(':id_uno'=>Yii::app()->getSession()->get('id_establecimiento')));
		
		$model = new Planilla;
		
		$detallePlanilla = new DetallePlanilla;
		
		$validatedDetalles = array();  //ensure an empty array
		
	
		//die("detailOK=$detailOK");
		$this->render('adulto',array(
				'model'=>$model,
				//submit the member and validatedItems to the widget in the edit form
				'detallePlanilla'=>$detallePlanilla,
				'validatedDetalles' => $validatedDetalles,
				'establecimiento' => $establecimiento
		));
		
	}
	
	public function actionConfirmar() {
		echo "<PRE>";
		print_r($_POST);
		echo "</PRE>";
	}
	
	public function actionSelectplanilla()
	{
	
		$model = new SelectPlanilla;
		$planilla_list = UsuEstPla::model()->findAll(array('condition'=>'id_usuario=:x', 'params'=>array(':x'=>Yii::app()->user->id)));
	
		foreach($planilla_list as $list1)
		{
			$company[] = TipoPlanilla::model()->findByPk($list1->id_tipo_planilla);
		}
	
		if(!isset($company))
		{
			Yii::app()->user->setFlash('error', '<strong>Error!</strong> No tiene planillas para cargar');
			$this->redirect(array('/'));
		}
	
		if(isset($_POST['SelectPlanilla']))
		{
			$model->attributes=$_POST['SelectPlanilla'];
	
			if($model->descripcion != null)
			{
	
			  
				Yii::app()->user->setState('id_tipo_planilla',$model->descripcion);
				
				if ($model->descripcion == 1){
					$this->redirect(array('inicial/create'));
				}
				if ($model->descripcion == 2){
					$this->redirect(array('adulto/create'));
				}
				if ($model->descripcion == 3){
					$this->redirect(array('serviciocomplementario/create'));
				}
				if ($model->descripcion == 4){
					$this->redirect(array('noformal/create'));
				}
				if ($model->descripcion == 5){
					$this->redirect(array('egb/create'));
				}
				if ($model->descripcion == 6){
					$this->redirect(array('secundariopolimodal/create'));
				}
	
			}
			else
			{
				Yii::app()->user->setFlash('error', '<strong>Por favor!</strong> Seleccione un tipo de planilla para cargar.');
				$this->redirect(array('selectplanilla'));
			}
		}
		else
		{
			$this->render('select_planilla',array('model'=>$model,'company'=>$company,
			));
		}
	}
}
