<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<h1>Login</h1>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note"> <span class="required">* Campos requeridos.</span></p>
	</br>
	</br>
	<div id="loginBox">
			<div class="row">
				<span class="required">*&nbsp;</span><?php echo $form->labelEx($model,'Usuario'); ?>
				&nbsp;&nbsp;&nbsp;<?php echo $form->textField($model,'username'); ?>
				<?php echo $form->error($model,'username'); ?>
			</div>
		
			<div class="row">
				<span class="required">*&nbsp;</span><?php echo $form->labelEx($model,'Contraseña'); ?>
				&nbsp;&nbsp;&nbsp;<?php echo $form->passwordField($model,'password'); ?>
				<?php echo $form->error($model,'password'); ?>
				
			</div>
	</div>
	<div class="rememberMe">
		&nbsp;&nbsp;&nbsp;<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Login'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
