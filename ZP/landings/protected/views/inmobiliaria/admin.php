<?php
/* @var $this InmobiliariaController */
/* @var $model Inmobiliaria */

$this->breadcrumbs=array(
	'Inmobiliarias'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar Inmobiliaria', 'url'=>array('index')),
	array('label'=>'Nueva Inmobiliaria', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('inmobiliaria-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Inmobiliarias</h1>

<p>
Utiliza operadores de busqueda (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) 
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'inmobiliaria-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'img_background',
		'email',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
