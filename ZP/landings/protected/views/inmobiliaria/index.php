<?php
/* @var $this InmobiliariaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inmobiliarias',
);

$this->menu=array(
	array('label'=>'Nueva Inmobiliaria', 'url'=>array('create')),
	array('label'=>'Inmobiliarias', 'url'=>array('admin')),
);
?>

<h1>Inmobiliarias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
