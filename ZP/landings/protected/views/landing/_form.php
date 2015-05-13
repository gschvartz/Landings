<?php
/* @var $this LandingController */
/* @var $model Landing */
/* @var $form CActiveForm */
$paises = array(
	'ar' => 'Argentina',
	'co' => 'Colombia',
	'mx' => 'Mexico',
	);

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
		$inmobiliarias = Inmobiliaria::model()->findAll(); 
	?>
	<div class="row">
		<?php echo $form->labelEx($model,'id_inmobiliaria'); ?>
		<?php echo CHtml::activeDropDownList($model, 'id_inmobiliaria',CHtml::listData($inmobiliarias, 'id', 'name')); ?>
		<?php echo $form->error($model,'id_inmobiliaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo CHtml::activeDropDownList($model, 'country',$paises); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url_landing_name'); ?>
		<?php echo $form->textField($model,'url_landing_name',array('size'=>60,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'url_landing_name'); ?>
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
		<?php echo $form->labelEx($model,'font_content_google'); ?>
		<?php echo $form->textField($model,'font_content_google',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'font_content_google'); ?>
	</div>
	<p style="font-size:10px;padding-left: 145px;">Ej: < link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css' ></p>

	<div class="row">
		<?php echo $form->labelEx($model,'font_family_content'); ?>
		<?php echo $form->textField($model,'font_family_content',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'font_family_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'legales'); ?>
		<?php echo $form->textArea($model,'legales',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'legales'); ?>
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
		<?php echo $form->labelEx($model,'Adwords'); ?>
		<?php echo $form->textArea($model,'adwords',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'adwords'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Facebook'); ?>
		<?php echo $form->textArea($model,'facebook',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'facebook'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'font_header_google'); ?>
		<?php echo $form->textField($model,'font_header_google',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'font_header_google'); ?>
	</div>
	<p style="font-size:10px;padding-left: 145px;">Ej: < link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css' ></p>

	<div class="row">
		<?php echo $form->labelEx($model,'font_family_header'); ?>
		<?php echo $form->textField($model,'font_family_header',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'font_family_header'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'font_footer_google'); ?>
		<?php echo $form->textField($model,'font_footer_google',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'font_footer_google'); ?>
	</div>
	<p style="font-size:10px;padding-left: 145px;">Ej: < link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css' ></p>

	<div class="row">
		<?php echo $form->labelEx($model,'font_family_footer'); ?>
		<?php echo $form->textField($model,'font_family_footer',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'font_family_footer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'show_states'); ?>
		<?php echo CHtml::activeDropDownList($model, 'show_states',$bool); ?>
		<?php echo $form->error($model,'show_states'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'allow_select'); ?>
		<?php echo CHtml::activeDropDownList($model, 'allow_select',$bool); ?>
		<?php echo $form->error($model,'allow_select'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lbl_select'); ?>
		<?php echo $form->textField($model,'lbl_select',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'lbl_select'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content_select'); ?>
		<?php echo $form->textField($model,'content_select',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'content_select'); ?>
	</div>
	<p style="margin-left:145px;font-size: 12px;" class="note">Valor1,Valor2 | Ejm: 1 Ambiente,2 Ambientes,3 Ambientes<br>
		Si el campo tiene valores se interpreta como combo, caso contrario es una entrada de texto.</p>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->