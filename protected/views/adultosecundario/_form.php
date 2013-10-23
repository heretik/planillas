<style type="text/css">
.form .tableizer-table tr td {
	color: #000;	/*font-size: small;*/
}
.tableizer-table tr td {
	font-weight: bold;
}
.form.wide .tableizer-table tr td {
	color: #000;
}
.form.wide table tr .blanco {
	color: #FFF;
}
.form.wide table {
	font-weight: bold;
}
.yy {
	color: #FFF;
}
</style>


<meta charset="utf-8">﻿
   
<div class="form wide">
<p>
  <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'planilla-form',
	'enableAjaxValidation'=>false,
	'method'=>'post',
	'type'=>'horizontal',
	'htmlOptions'=>array(
		'enctype'=>'multipart/form-data'
		)	
	)); ?>
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
  
  
  <?php $box = $this->beginWidget('bootstrap.widgets.TbBox', array(
	'title' => 'Datos de la Planila',
	'headerIcon' => 'icon-th-list',
	// when displaying a table, if we include bootstra-widget-table class
	// the table will be 0-padding to the box
	'htmlOptions' => array('class'=>'bootstrap-widget-table')
));?>
  
  <!-- <div id="yw116"><div class="alert in alert-block fade alert-error"><strong>Importante!</strong> Campos con <span class="required">*</span> son requeridos.</div></div>
 --><?php $this->widget(
    'bootstrap.widgets.TbLabel',
    array(
        'type' => 'info',
        // 'success', 'warning', 'important', 'info' or 'inverse'
        'label' => 'Importante! Campos con * son requeridos.',
    )
);?>
  <?php
     $this->widget('bootstrap.widgets.TbAlert'); 
	echo $form->errorSummary(array_merge(array($model),$validatedDetalles));
?>
</p>
<p>
  
  <?php 
    $cs = Yii::app()->getClientScript();
	$cs->registerCoreScript('jquery');
	$cs->registerCoreScript('jquery.ui');
	$cs->registerCssFile(Yii::app()->request->baseUrl.'/css/bootstrap/jquery-ui.css');?>	
  
  
</p>
<table class="linear" >
  <?php

	
	$detalleFormConfig = array(
		  'elements'=>array(
		  /* 	'id_nivel'=>array(
		  		'type'=>'dropdownlist',
		  		'items'=>GxHtml::listDataEx(NivelServicio::model()->findAll(array('condition'=>"t.id_nivel = 8")),'id_nivel','descripcion'),
		  		'prompt'=>'Seleccione',
		  		'class' => 'miselect2'
		  	), */
		  	'id_sala_ciclo_anio'=>array(
		  		'type'=>'dropdownlist',
		  		'items'=>GxHtml::listDataEx(SalaCicloAnio::model()->findAll(array('condition'=>"t.id_sala_ciclo_anio = 11 or t.id_sala_ciclo_anio = 12 or t.id_sala_ciclo_anio = 13")),'id_sala_ciclo_anio', 'descripcion'),
		  		'label'=>'Año',
		  		'prompt'=>'Seleccione',
		  		'class' => 'miselect2'
		  	),
		  	'id_turno'=>array(
		  		'type'=>'dropdownlist',
		  		'items'=>GxHtml::listDataEx(Turno::model()->findAll(),'id_turno', 'descripcion'),
		  		'prompt'=>'Seleccione',
		  		'class' => 'miselect2'
		  	),
		  	'nombre_seccion'=>array(
		  		'type'=>'text',
		  		'class' => 'miinput2'
		  	),
		  	'id_seccion'=>array(
		  		'type'=>'dropdownlist',
		  		'label'=>'Tipo Seccion',
		  		'items'=>GxHtml::listDataEx(Seccion::model()->findAll(array('order'=>'id_seccion','condition'=>"t.id_seccion = 1 or t.id_seccion = 2 or t.id_seccion = 3 or t.id_seccion = 4 or t.id_seccion = 5")),'id_seccion', 'descripcion'),
		  		'prompt'=>'Seleccione',
		  		'class' => 'miselect2'
		  	),
		  	'id_titulo'=>array(
		  		'type'=>'dropdownlist',
		  		'items'=>GxHtml::listDataEx(TituloTipo::model()->SelectPlanDeEstudio(),'c_titulo', 'descripcion'),
		  		'prompt'=>'Seleccione',
		  		'class' => 'miselect3'
		  	),
		  	'id_orientacion'=>array(
		  		'type'=>'dropdownlist',
		  		'items'=>GxHtml::listDataEx(OrientacionTipo::model()->findAll(),'c_orientacion', 'descripcion'),
		  		'prompt'=>'Seleccione',
		  		'class' => 'miselect2'
		  	),
            'alu_mat_tot'=>array(
				'type'=>'text',
				'label'=>'Total Mat',
            	'class' => 'miinput'
			),
		  	'alu_mat_var'=>array(
		  		'type'=>'text',
		  		'label'=>'Var Mat',
		  		'class' => 'miinput'
		  	),
/* 		  	'alu_rep_tot'=>array(
		  		'type'=>'text',
		  		'label'=>'Total Rep',
		  		'class' => 'miinput'
		  	),
		  	'alu_rep_var'=>array(
		  		'type'=>'text',
		  		'label'=>'Var Rep',
		  		'class' => 'miinput'
		  	),  */

			
		));

	$this->widget('ext.multimodelform.MultiModelForm',array(
			'id' => 'id_detalle', //the unique widget id
			'formConfig' => $detalleFormConfig, //the form configuration array
			'model' => $detallePlanilla, //instance of the form model
			'tableView' => true,
			'validatedItems' => $validatedDetalles,
			'bootstrapLayout' => true,
			'data' => empty($validatedItems) ? $detallePlanilla->findAll(
                                             array('condition'=>'id_planilla=:IdPlanilla',
												   'order'=>'id_nivel desc,id_sala_ciclo_anio,id_turno,nombre_seccion',
                                                   'params'=>array(':IdPlanilla'=>$model->id_planilla),
                                                   )) : null,
            'showAddItemOnError' => true, //not allow add items when in validation error mode (default = true)
            'fieldsetWrapper' => array('tag' => 'div',
                'htmlOptions' => array('class' => 'view','style'=>'position:relative;background:#EFEFEF;')
            ),
            'removeLinkWrapper' => array('tag' => 'div',
                'htmlOptions' => array('style'=>'position:absolute; top:1em; right:1em;')
            ),

		));
?>
  
</table>

<p>
  <?php $this->endWidget();?>
  
  <?php $box = $this->beginWidget('bootstrap.widgets.TbBox', array(
	'title' => 'Cantidad de Secciones/Divisiones',
	'headerIcon' => 'icon-th-list',
	'htmlOptions' => array('class'=>'bootstrap-widget-table')
));?>
  
  <!--  <div id="yw116">
	<div class="alert in alert-block fade alert-error">
	 <strong>Importante!</strong> 
	 Todos los campos con deben contener un valor. Completar con cero '0' si no hay valor en la planilla.
  	 </div>
	</div> -->
  <?php $this->widget(
    'bootstrap.widgets.TbLabel',
    array(
        'type' => 'info',
        // 'success', 'warning', 'important', 'info' or 'inverse'
        'label' => 'Importante! Todos los campos con deben contener un valor. Completar con cero "0" si no hay valor en la planilla.',
    )
);?>
  </p>
<p>
  <style type="text/css">
table.tableizer-table {
	border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
} 
.tableizer-table td {
	padding: 4px;
	margin: 3px;
	border: 1px solid #ccc;
}
.tableizer-table th {
	background-color: #104E8B; 
	color: #FFF;
	font-weight: bold;
}
    </style>
  
</p>
<table align="center" class="tableizer-table">
	  <tr>
		  <td width="57" rowspan="4" bgcolor="#104E8B"><span class="blanco">CANTIDAD DE SECCIONES/DIVISIONES</span></td>
		  <th class="tableizer-firstrow">&nbsp;</th>
		  <td width="48" bgcolor="#104E8B" class="blanco">SECUNDARIO</td>
		</tr>
		<tr>
		  <td>Independientes </td>
		  <td bgcolor="#99FFCC"><?php echo $form->textField($model,'tot_ind_sec',array('class'=>'span1','value'=>$model->tot_ind_sec <> 0 ?  $model->tot_ind_sec : 0));?></td>
	  </tr>
		<tr>
		  <td>Múltiples </td>
		  <td bgcolor="#99FFCC"><?php echo $form->textField($model,'tot_mul_sex',array('class'=>'span1','value'=>$model->tot_mul_sex <> 0 ?  $model->tot_mul_sex : 0));?></td>
	  </tr>
		<tr>
		  <td>Total</td>
		  <td><?php echo $form->textField($model,'tot_sec_div',array('class'=>'span1','readonly'=>'readonly','value'=>$model->tot_sec_div <> 0 ?  $model->tot_sec_div : 0));?></td>
	  </tr>
	</table>
	<p>&nbsp;</p>
	<p>
	  <?php $this->endWidget(); ?>
  </p>
	<p>
	  
	  <?php $box = $this->beginWidget('bootstrap.widgets.TbBox', array(
	'title' => 'Cantidad de Beneficiarios de Servicios de Alimentacion',
	'headerIcon' => 'icon-th-list',
	'htmlOptions' => array('class'=>'bootstrap-widget-table')
));?>
  </p>
  <p><!--   <div id="yw116">
	<div class="alert in alert-block fade alert-error">
	 <strong>Importante!</strong> 
	 Todos los campos con deben contener un valor. Completar con cero '0' si no hay valor en la planilla.
    </div>
  </div> -->
      <?php $this->widget(
    'bootstrap.widgets.TbLabel',
    array(
        'type' => 'info',
        // 'success', 'warning', 'important', 'info' or 'inverse'
        'label' => 'Importante! Todos los campos con deben contener un valor. Completar con cero "0" si no hay valor en la planilla.',
    )
);?>
    <style type="text/css">
table.tableizer-table {
	border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
} 
.tableizer-table td {
	padding: 4px;
	margin: 3px;
	border: 1px solid #ccc;
}
.tableizer-table th {
	background-color: #104E8B; 
	color: #FFF;
	font-weight: bold;
}
    </style>
  </p>
  <p>&nbsp; </p>
    <table align="center" class="tableizer-table">
		<tr>
			<td width="254" bgcolor="#104E8B"><span class="blanco">CANTIDAD DE BENEFICIARIOS DE SERVICIOS DE ALIMENTACION</span></td>
			<td width="48" bgcolor="#104E8B" class="blanco">TOTAL</td>
		</tr>
		<tr>
			<td>ALMUERZO</td>
			<td bgcolor="#99FFCC"><?php echo $form->textField($model,'tot_alm_ben',array('class'=>'span1','value'=>$model->tot_alm_ben <> 0 ?  $model->tot_alm_ben : 0 ));?></td>
		</tr>
		<tr>
			<td>COPA DE LECHE</td>
			<td bgcolor="#99FFCC"><?php echo $form->textField($model,'tot_cop_man',array('class'=>'span1','value'=>$model->tot_cop_man <> 0 ?  $model->tot_cop_man : 0 ));?></td>
		</tr>
		<tr>
			<td>REFRIGERIO / MERIENDA REFORZADA: </td>
			<td bgcolor="#99FFCC"><?php echo $form->textField($model,'tot_ref_man',array('class'=>'span1','value'=>$model->tot_ref_man <> 0 ?  $model->tot_ref_man : 0 ));?></td>
		</tr>
		<tr>
		  <td>Otros Servicios Alimentarios</td>
		  <td bgcolor="#99FFCC"><?php echo $form->textField($model,'tot_ref_tar',array('class'=>'span1','value'=>$model->tot_ref_tar <> 0 ?  $model->tot_ref_tar : 0 ));?></td>
	  </tr>
	</table>


	<p>
  <?php $this->endWidget(); ?>	
	  
	  
	  
	  
  <?php $box = $this->beginWidget('bootstrap.widgets.TbBox', array(
	'title' => 'Datos de la localizacion',
	'headerIcon' => 'icon-th-list',
	'htmlOptions' => array('class'=>'bootstrap-widget-table')
));?>
  </p>
  <div class="control-group">		
	<div class="span11">    
    <span class="span5"><?php /*echo $form->textFieldRow($model,'dom_act');?></span>
    <span class="span5"><?php echo $form->textFieldRow($responsable,'telefono',array("disabled"=>"disabled"));*/?></span>
   
    </div>   
</div>   

<style type="text/css">
table.tableizer-table {
	border: 1px solid #CCC; font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
} 
.tableizer-table td {
	padding: 4px;
	margin: 3px;
	border: 1px solid #ccc;
}
.tableizer-table th {
	background-color: #104E8B; 
	color: #FFF;
	font-weight: bold;
}
</style>

	<table border="0" align="center" class="tableizer-table">
		<tr>
			<td width="145" bgcolor="#104E8B"><span class="yy">Domicilio</span> <span class="yy">Actualizado</span>:</td>
			<td width="375" bgcolor="#99FFCC"><?php echo $form->textField($model,'dom_act',array('class'=>'span4'));?></td>
		</tr>
		<tr>
			<td bgcolor="#104E8B"><span class="yy">Teléfono/s:</span></td>
			<td bgcolor="#99FFCC"><?php echo $form->textField($model,'telefono',array('class'=>'span2'));?>
			</td>
		</tr>
	</table>

	<p>
	  <?php $this->endWidget();?>
	  
	  
  <?php $box = $this->beginWidget('bootstrap.widgets.TbBox', array(
	'title' => 'Datos de ingreso',
	'headerIcon' => 'icon-th-list',
	'htmlOptions' => array('class'=>'bootstrap-widget-table')
));?>
  </p>
  <div class="control-group">		
	<div class="span11">    
    <span class="span5"><?php echo $form->textFieldRow($model,'ingresador');?></span>
    <span class="span5"><?php echo $form->textFieldRow($responsable,'apellido',array("disabled"=>"disabled"));?></span>
   
    </div>   
</div>   
<?php $this->endWidget();?>

<div class="form-actions" style="text-align: center;">
 	
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			 'icon'=>'ok white', 
			'label'=>$model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Save'),
		)); ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'reset',
             'icon'=>'remove',  
			'label'=> Yii::t('app', 'Reset'),
		)); ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'link',
            'url'=>array('/ingresador/admin'),
			'icon'=>'remove-sign',  
			'label'=> Yii::t('app', 'Cancel'),
		)); ?>
  </div>
<?php $this->endWidget(); ?>
</div>

<script>
function sumar2(e){  
var a =$('#Planilla_tot_ind_sec').val();
var b =$('#Planilla_tot_mul_sex').val();

if(a==''){a=0;}
if(b==''){b=0;}

var total=parseFloat(a) + parseFloat(b);
$('#Planilla_tot_sec_div').val(total);
}
$('#Planilla_tot_ind_sec').keyup(sumar2);
$('#Planilla_tot_mul_sex').keyup(sumar2);

</script>