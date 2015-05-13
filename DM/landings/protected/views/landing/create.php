<?php
/* @var $this LandingController */
/* @var $model Landing */

$this->breadcrumbs=array(
	'Landings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Landings', 'url'=>array('index')),
	array('label'=>'Landings', 'url'=>array('admin')),
);
?>

<h1>Create Landing</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>