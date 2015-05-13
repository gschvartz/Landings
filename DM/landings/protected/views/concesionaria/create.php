<?php
/* @var $this ConcesionariaController */
/* @var $model Concesionaria */

$this->breadcrumbs=array(
	'Concesionarias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Concesionaria', 'url'=>array('index')),
	array('label'=>'Concesionarias', 'url'=>array('admin')),
);
?>

<h1>Nueva Concesionaria</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

