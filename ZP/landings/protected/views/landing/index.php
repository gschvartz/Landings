<?php
/* @var $this LandingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Landings',
);

$this->menu=array(
	array('label'=>'Nueva Landing', 'url'=>array('create')),
	array('label'=>'Landings', 'url'=>array('admin')),
);
?>

<h1>Landings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
