<?php
/* @var $this ConcesionariaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Concesionarias',
);

$this->menu=array(
	array('label'=>'Nueva Concesionaria', 'url'=>array('create')),
	array('label'=>'Concesionarias', 'url'=>array('admin')),
);
?>

<h1>Concesionarias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
