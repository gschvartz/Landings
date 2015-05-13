<?php
/* @var $this InmobiliariaController */
/* @var $model Inmobiliaria */

$this->breadcrumbs=array(
	'Inmobiliarias'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Listar Inmobiliarias', 'url'=>array('index')),
	array('label'=>'Nueva Inmobiliaria', 'url'=>array('create')),
	array('label'=>'Editar Inmobiliaria', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Inmobiliaria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Esta seguro de borrar esta inmobiliaria?')),
	array('label'=>'Inmobiliarias', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'img_background',
		'email',
	),
)); ?>
