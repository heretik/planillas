<?php echo $this->renderPartial('/ingresador/_datosglobales'); ?>

 <h3 style="margin-top: 25px;"></h3>
<?php /*
$form=$this->beginWidget('CActiveForm', array(
		'id'=>'select_company_form',
		'enableAjaxValidation'=>true,
)); */
?>
<div class="form">
	<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
			'id'=>'select_company_form',
			'enableAjaxValidation'=>false,
			'method'=>'post',
			'type'=>'horizontal',
			'htmlOptions'=>array(
		'enctype'=>'multipart/form-data'
		)
	)); ?>


	<?php echo $form->errorSummary($model); ?>

	<div class="block-error">
		<?php	
		$this->widget('bootstrap.widgets.TbAlert', array(
		    'block'=>true, // display a larger alert block?
		    'fade'=>true, // use transitions?
		    'closeText'=>'×', // close link text - if set to false, no close link is displayed
		    'alerts'=>array( // configurations per alert type
			    'success'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'), // success, info, warning, error or danger
		    	'error'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'),
		    ),
));?>
	</div>

	<?php $box = $this->beginWidget('bootstrap.widgets.TbBox', array(
			'title' => 'Planillas para cargar',
			'headerIcon' => 'icon-th-list',
			// when displaying a table, if we include bootstra-widget-table class
			// the table will be 0-padding to the box
			'htmlOptions' => array('class'=>'bootstrap-widget-table')
));?>
	<div class="row">
		<?php


		/*echo "<PRE>";
		 print_r($company);
		echo "</PRE>";*/
		$listplanillas = CHtml::listData($company,'id_tipo_planilla', 'descripcion');
		/*
		 echo $form->labelEx($model,'descripcion',array('class'=>'main-select-label'));
		echo $form->radioButtonList($model,'descripcion',$listcompany,array('template'=>'<span class="rb">{input} {label}</span>'));
		echo $form->error($model,'descripcion');*/
		?>

		<div class="control-group">
			<div class="span11">
				<span class="span5"><?php echo $form->radioButtonList($model,'descripcion',$listplanillas);?>
				</span>
			</div>
		</div>

	</div>
	<?php $this->endWidget();?>
	<div class="row buttons">
		<?php //echo CHtml::submitButton('Cargar',array('class'=>'submit','name' => 'select_planilla')); ?>
	</div>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', 
				array(  'buttonType'=>'submit',
        				'type'=>'primary',
        				'label'=>'Cargar'))
        				 ?>
	</div>
	<?php $this->endWidget(); ?>
</div>





