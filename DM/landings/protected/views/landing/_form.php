<?php
/* @var $this LandingController */
/* @var $model Landing */
/* @var $form CActiveForm */

$bool = array(
	'0' => 'No',
	'1' => 'Si',
	);
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'landing-form',
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<?php
		$concesionarias = Concesionaria::model()->findAll(); 
	?>
	<div class="row">
		<?php echo $form->labelEx($model,'id_concesionaria'); ?>
		<?php echo CHtml::activeDropDownList($model, 'id_concesionaria',CHtml::listData($concesionarias, 'id', 'name')); ?>
		<?php echo $form->error($model,'id_concesionaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title_header'); ?>
		<?php echo $form->textField($model,'title_header',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'title_header'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title_footer'); ?>
		<?php echo $form->textField($model,'title_footer',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'title_footer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'legales'); ?>
		<?php echo $form->textArea($model,'legales',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'legales'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adwords_code'); ?>
		<?php echo $form->textArea($model,'adwords_code',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'adwords_code'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Imagen Landing'); ?>
		<input size="60" maxlength="250" name="Landing[img_background]" id="Landing_img_background" type="file" value="<?=$model->img_background;?>" />
		<?php echo $form->error($model,'img_background'); ?>
	</div>
	<?php if($model->isNewRecord!='1'){ ?>
	<div class="row" style="margin-left: 150px;">
     	<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$model->img_background,$model->img_background,array("width"=>200)); ?> 
	</div>
	<?php } ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Fondo Formulario'); ?>
		<input size="60" maxlength="250" name="Landing[img_1]" id="Landing_img_1" type="file" value="<?=$model->img_1;?>" />
		<?php echo $form->error($model,'img_1'); ?>
	</div>
	<?php if($model->isNewRecord!='1'){ ?>
	<div class="row" style="margin-left: 150px;">
     	<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$model->img_1,$model->img_1,array("width"=>200)); ?> 
	</div>
	<?php } ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Imagen Boton'); ?>
		<input size="60" maxlength="250" name="Landing[img_2]" id="Landing_img_2" type="file" value="<?=$model->img_2;?>" />
		<?php echo $form->error($model,'img_2'); ?>
	</div>
	<?php if($model->isNewRecord!='1'){ ?>
	<div class="row" style="margin-left: 150px;">
     	<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$model->img_2,$model->img_2,array("width"=>200)); ?> 
	</div>
	<?php } ?>

	<div class="row">
		<?php echo $form->labelEx($model,'imag_3'); ?>
		<input size="60" maxlength="250" name="Landing[imag_3]" id="Landing_imag_3" type="file" value="<?=$model->imag_3;?>" />
		<?php echo $form->error($model,'imag_3'); ?>
	</div>
	<?php if($model->isNewRecord!='1'){ ?>
	<div class="row" style="margin-left: 150px;">
     	<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$model->imag_3,$model->imag_3,array("width"=>200)); ?> 
	</div>
	<?php } ?>


	<div class="row">
		<?php echo $form->labelEx($model,'Color Header'); ?>
		<?php echo $form->textField($model,'color_head',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'color_head'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Color Subtitulo'); ?>
		<?php echo $form->textField($model,'color_foot',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'color_foot'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Color Content'); ?>
		<?php echo $form->textField($model,'color_content',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'color_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Color Legales'); ?>
		<?php echo $form->textField($model,'color_legales',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'color_legales'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Background Content'); ?>
		<?php echo $form->textField($model,'color_background_content',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'color_background_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Size Header'); ?>
		<?php echo $form->textField($model,'font1',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'font1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Size Footer'); ?>
		<?php echo $form->textField($model,'font2',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'font2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Size Content'); ?>
		<?php echo $form->textField($model,'font_content',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'font_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Txt Submit Color'); ?>
		<?php echo $form->textField($model,'color_msg',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'color_msg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'allow_state'); ?>
		<?php echo CHtml::activeDropDownList($model, 'allow_state',$bool); ?>
		<?php echo $form->error($model,'allow_state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'allow_models'); ?>
		<?php echo CHtml::activeDropDownList($model, 'allow_models',$bool); ?>
		<?php echo $form->error($model,'allow_models'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'allow_comment'); ?>
		<?php echo CHtml::activeDropDownList($model, 'allow_comment',$bool); ?>
		<?php echo $form->error($model,'allow_comment'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->