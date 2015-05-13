<?php
/* @var $this InmobiliariaController */
/* @var $model Inmobiliaria */

$this->breadcrumbs=array(
	'Inmobiliarias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Inmobiliaria', 'url'=>array('index')),
	array('label'=>'Inmobiliarias', 'url'=>array('admin')),
);
?>

<h1>Nueva Inmobiliaria</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

