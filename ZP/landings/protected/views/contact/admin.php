<?php
/* @var $this ContactController */
/* @var $model Contact */
include "protected/config/connect.php";
include "protected/models/Landing.php";

if(isset($_GET['xls']) && $_GET['xls']==1){

	header("Location: export.php?landing_id=".$_POST['landing_id']);

}
$this->breadcrumbs=array(
	'Contacts'=>array('index'),
	'Manage',
);

$landings = Landing::model()->findAll(); 
/*
$this->menu=array(
	array('label'=>'List Contact', 'url'=>array('index')),
	array('label'=>'Create Contact', 'url'=>array('create')),
);
*/
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('contact-grid', {
		data: $(this).serialize()
	});
	return false;
});
");

?>

<h1>Contactos</h1>

<p>
Utiliza operadores de busqueda (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) 
</p>

<div style="float:left">Exportar contactos de:</div> 
<form method="post" action="?r=contact/admin&xls=1"> 
	<select style="float:left;" name="landing_id">
		<option value="">Seleccione</option>
		<?php 	foreach($landings as $item){
					echo "<option value='".$item['id']."'>".$item['title']."</option>";
				} ?>
	</select>
	<input style="float:left;" class="xls" type="image" src="images/xls.png" name="export" value="xls"/>
</form>
<br><br>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'contact-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'first_name',
		'last_name',
		'email',
		'name_landing',
		'name_inmobiliaria',
		'comment',
		'phone',
		'model',
		/*'country',
		'states',
		'font',
		'id_landing',
		'id_concesionaria',*/
		
		/*array(
			'class'=>'CButtonColumn',
		),*/
	),
)); ?>
