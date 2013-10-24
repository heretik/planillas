<?php echo $this->renderPartial('/ingresador/_datosglobales'); ?>

<h1>    <?php echo Yii::t('app', 'Planilla'); ?>  Educación Comun - Nivel Secundario Polimodal <small><?php echo Yii::t('app', 'Create'); ?> </small></h1>

<div class="btn-toolbar">
    <div class="btn-group">
<?php 
                 /*   $this->widget("bootstrap.widgets.TbButton", array(
                        "label"=> Yii::t('app', 'Create'),
                        "icon"=>"icon-plus",
                        "url"=>array("create")
                    ));*/
                    $this->widget("bootstrap.widgets.TbButton", array(
                        "label"=>Yii::t('app', 'Manage'),'type'=>'primary',
                        "icon"=>"icon-list-alt icon-white",
                        "url"=>array('/ingresador/admin')
                    ));
        ?>
    </div>
</div>

<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'planilla-form',
	'enableAjaxValidation'=>false,
	'method'=>'post',
	'type'=>'horizontal',
	'htmlOptions'=>array(
		'enctype'=>'multipart/form-data'
		)	
	)); ?>

	<?php $cs = Yii::app()->getClientScript();
		$cs->registerCoreScript('jquery');
		$cs->registerCoreScript('jquery.ui');
		$cs->registerCssFile(Yii::app()->request->baseUrl.'/css/bootstrap/jquery-ui.css');
		
?>
		
   <script> 
	$(".btnreset").click(function(){
		$(":input","planilla-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	}); 
   </script>
   
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
   
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo2',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion2").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo3',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion3").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo4',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion4").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo5',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion5").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo6',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion6").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo7',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion7").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo8',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion8").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo9',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion9").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo10',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion10").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo11',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion11").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo12',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion12").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo13',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion13").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo14',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion14").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo15',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion15").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo16',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion16").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo17',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion17").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo18',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion18").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo19',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion19").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo20',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion20").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo21',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion21").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo22',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion22").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo23',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion23").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo24',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion24").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo25',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion25").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo26',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion26").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo27',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion27").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo28',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion28").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo29',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion29").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo30',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion30").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo31',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion31").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo32',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion32").html(html)}});
    return false;});
	}); 
   </script>   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo33',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion33").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo34',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion34").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo35',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion35").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo36',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion36").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo37',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion37").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo38',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion38").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo39',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion39").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo40',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion40").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo41',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion41").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo42',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion42").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo43',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion43").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo44',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion44").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo45',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion45").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo46',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion46").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo47',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion47").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo48',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion48").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo49',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion49.html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_id_titulo50',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/Planilla/Selectorientacion', 'cache':false, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_id_orientacion50").html(html)}});
    return false;});
	}); 
   </script>
   	
   	    
<script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___0_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___0_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___1_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___1_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___2_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___2_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___3_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___3_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___4_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___4_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___5_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___5_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___6_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___6_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___7_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___7_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___8_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___8_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___9_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___9_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___10_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___10_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___11_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___11_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___12_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___12_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___13_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___13_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___14_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___14_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___15_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___15_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___16_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___16_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___17_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___17_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___18_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___18_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___19_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___19_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___20_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___20_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___21_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___21_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___22_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___22_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___23_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___23_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___24_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___24_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___25_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___25_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___26_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___26_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___27_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___27_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___28_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___28_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___29_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___29_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
         <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___30_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___30_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___31_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___31_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___32_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___32_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>   <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___33_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___33_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___34_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___34_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___35_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___35_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___36_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___36_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___37_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___37_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___38_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___38_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___39_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___39_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___40_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___40_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___41_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___41_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___42_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___42_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___43_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___43_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___44_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___44_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___45_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___45_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___46_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___46_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___47_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___47_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___48_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___48_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___49_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___49_id_orientacion.html(html)}});
    return false;});
	}); 
   </script>
      <script 
    type="text/javascript">
	jQuery(function($) {	jQuery('body').on('change','#AdultoSecundario_n___50_id_titulo',
	function(){jQuery.ajax({ 'type':'POST', 'url':'/planillas/SecundarioPolimodal/Selectorientacion', 'cache':true, 'data': {id: $(this).attr('value')}, 
		'success':function(html){jQuery("#AdultoSecundario_n___50_id_orientacion").html(html)}});
    return false;});
	}); 
   </script>
   	
<?php /*$box = $this->beginWidget('bootstrap.widgets.TbBox', array(
	'title' => 'Encabezado de la Planila',
	'headerIcon' => 'icon-home',
	// when displaying a table, if we include bootstra-widget-table class
	// the table will be 0-padding to the box
	'htmlOptions' => array('class'=>'bootstrap-widget-table')
));?>   
 <div class="control-group">		
	<div class="span11">    
    <?php // echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span10')); ?>
    
    <span class="span5"><?php echo $form->textFieldRow($model,'mes',array("disabled"=>"disabled"));?></span>
    <span class="span4"><?php echo $form->textFieldRow($model,'anio',array("disabled"=>"disabled","label"=>"Año"));?></span>
    <span class="span5"><?php echo $form->textFieldRow($establecimiento,'nombre',array('class'=>'span4',"disabled"=>"disabled"));?></span>
    <span class="span4"><?php echo $form->textFieldRow($establecimiento,'cue',array('class'=>'span1',"disabled"=>"disabled"));?></span>
    <span class="span5"><?php echo $form->textFieldRow($localizacion,'nombre',array('class'=>'span4',"disabled"=>"disabled"));?></span>
    <span class="span4"><?php echo $form->textFieldRow($localizacion,'anexo',array('class'=>'span1',"disabled"=>"disabled"));?></span>
 
     </div>   
 </div>   
 <?php $this->endWidget();*/?>
 <?php $this->endWidget(); ?>
</div>
     
<?php echo $this->renderPartial('_form', array('model'=>$model,
			//submit the member and validatedItems to the widget in the edit form
			'detallePlanilla'=>$detallePlanilla,
			'validatedDetalles' => $validatedDetalles,
			'establecimiento' => $establecimiento,
		    'responsable'=>	$responsable
		)); ?>

