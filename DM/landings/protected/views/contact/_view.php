<?php
/* @var $this ContactController */
/* @var $data Contact */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
	<?php echo CHtml::encode($data->last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('model')); ?>:</b>
	<?php echo CHtml::encode($data->model); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
	<?php echo CHtml::encode($data->country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('states')); ?>:</b>
	<?php echo CHtml::encode($data->states); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('font')); ?>:</b>
	<?php echo CHtml::encode($data->font); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_landing')); ?>:</b>
	<?php echo CHtml::encode($data->id_landing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_concesionaria')); ?>:</b>
	<?php echo CHtml::encode($data->id_concesionaria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_landing')); ?>:</b>
	<?php echo CHtml::encode($data->name_landing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_concesionaria')); ?>:</b>
	<?php echo CHtml::encode($data->name_concesionaria); ?>
	<br />

	*/ ?>

</div>