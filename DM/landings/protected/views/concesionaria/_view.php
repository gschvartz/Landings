<?php
/* @var $this ConcesionariaController */
/* @var $data Concesionaria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idu_site')); ?>:</b>
	<?php echo CHtml::encode($data->idu_site); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('models')); ?>:</b>
	<?php echo CHtml::encode($data->models); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('img_background')); ?>:</b>
	<?php echo CHtml::encode($data->img_background); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adwords_code')); ?>:</b>
	<?php echo CHtml::encode($data->adwords_code); ?>
	<br />


</div>