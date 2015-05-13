<?php
/* @var $this ConcesionariaController */
/* @var $model Concesionaria */

$this->breadcrumbs=array(
	'Concesionarias'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Listar Concesionarias', 'url'=>array('index')),
	array('label'=>'Nueva Concesionaria', 'url'=>array('create')),
	array('label'=>'Editar Concesionaria', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Concesionaria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Esta seguro de borrar esta concesionaria?')),
	array('label'=>'Concesionarias', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'models',
		'img_background',
		'email',
		'adwords_code',
	),
)); ?>
