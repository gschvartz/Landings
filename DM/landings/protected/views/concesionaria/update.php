<?php
/* @var $this ConcesionariaController */
/* @var $model Concesionaria */

$this->breadcrumbs=array(
	'Concesionarias'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Concesionarias', 'url'=>array('index')),
	array('label'=>'Nueva Concesionaria', 'url'=>array('create')),
	array('label'=>'Ver Concesionaria', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Concesionaria', 'url'=>array('admin')),
);
?>

<h1>Editar <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>