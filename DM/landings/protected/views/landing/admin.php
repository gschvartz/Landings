<?php
/* @var $this LandingController */
/* @var $model Landing */

$this->breadcrumbs=array(
	'Landings'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar Landings', 'url'=>array('index')),
	array('label'=>'Nueva Landing', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('landing-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Landings</h1>

<p>
Utiliza operadores de busqueda (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) 
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'landing-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'id_concesionaria',
		'title',
		'title_header',
		'title_footer',
		'legales',
		/*
		'img_background',
		'img_1',
		'img_2',
		'imag_3',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
