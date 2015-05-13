<?php
/* @var $this LandingController */
/* @var $data Landing */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_concesionaria')); ?>:</b>
	<?php echo CHtml::encode($data->id_concesionaria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title_header')); ?>:</b>
	<?php echo CHtml::encode($data->title_header); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title_footer')); ?>:</b>
	<?php echo CHtml::encode($data->title_footer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('legales')); ?>:</b>
	<?php echo CHtml::encode($data->legales); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('img_background')); ?>:</b>
	<?php echo CHtml::encode($data->img_background); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('img_1')); ?>:</b>
	<?php echo CHtml::encode($data->img_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('img_2')); ?>:</b>
	<?php echo CHtml::encode($data->img_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imag_3')); ?>:</b>
	<?php echo CHtml::encode($data->imag_3); ?>
	<br />

	*/ ?>

</div>