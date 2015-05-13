<?php
/* @var $this InmobiliariaController */
/* @var $model Inmobiliaria */

$this->breadcrumbs=array(
	'Inmobiliarias'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Inmobiliarias', 'url'=>array('index')),
	array('label'=>'Nueva Inmobiliaria', 'url'=>array('create')),
	array('label'=>'Ver Inmobiliaria', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Inmobiliaria', 'url'=>array('admin')),
);
?>

<h1>Editar <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>