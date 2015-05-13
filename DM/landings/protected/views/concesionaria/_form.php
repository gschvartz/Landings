<?php
/* @var $this ConcesionariaController */
/* @var $model Concesionaria */
/* @var $form CActiveForm */
?>
<script type="text/javascript">

	var numinput = 0;
	function sendForm(){
		
	    var sContat = '';
		$("#intemsConfort").children(":input").each(function()
		{
		      sContat  += $(this).val()+"||";
		});
		$("#arrayConfort").val(sContat); 
		
		$('#form').submit();
	}
	
	function addInput(){
		numinput++;
		campo = '<input size="80" type="text" name="item'+numinput+'" value=""/></br>';
		$("#intemsConfort").append(campo);
	}

</script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	        'id' => 'upload-form',
	        'htmlOptions' => array('enctype' => 'multipart/form-data'),
			'enableAjaxValidation'=>false,
)); ?>

	<p class="note"> <span class="required">*</span> Campos requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idu_site'); ?>
		<?php echo $form->textField($model,'idu_site',array('size'=>60,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'idu_site'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'models'); ?>
		<?php echo $form->textField($model,'models',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'models'); ?>
	</div>
	<p style="margin-left:145px;font-size: 12px;" class="note">Modelo,Modelo | Ejm: Fiat Palio,Ford Fiesta,Chevrolet Corsa</p>


	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'adwords_code'); ?>
		<?php echo $form->textArea($model,'adwords_code',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'adwords_code'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->