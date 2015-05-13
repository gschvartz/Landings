<?php
/* @var $this LandingController */
/* @var $model Landing */

$this->breadcrumbs=array(
	'Landings'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Landing', 'url'=>array('index')),
	array('label'=>'Nueva Landing', 'url'=>array('create')),
	array('label'=>'Ver Landing', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Landings', 'url'=>array('admin')),
);
?>

<h1>Update Landing <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>