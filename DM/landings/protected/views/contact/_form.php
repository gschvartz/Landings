<?php
/* @var $this ContactController */
/* @var $model Contact */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment'); ?>
		<?php echo $form->textArea($model,'comment',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'model'); ?>
		<?php echo $form->textField($model,'model',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'model'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model,'country',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'states'); ?>
		<?php echo $form->textField($model,'states',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'states'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'font'); ?>
		<?php echo $form->textField($model,'font',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'font'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_landing'); ?>
		<?php echo $form->textField($model,'id_landing'); ?>
		<?php echo $form->error($model,'id_landing'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_concesionaria'); ?>
		<?php echo $form->textField($model,'id_concesionaria'); ?>
		<?php echo $form->error($model,'id_concesionaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_landing'); ?>
		<?php echo $form->textField($model,'name_landing',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'name_landing'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_concesionaria'); ?>
		<?php echo $form->textField($model,'name_concesionaria',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'name_concesionaria'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->