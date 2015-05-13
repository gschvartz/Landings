<?php
/* @var $this LandingController */
/* @var $model Landing */
if(isset($_POST['submit']) && $_POST['submit']==1){
	$url_pais = "/".$_POST['pais'];
	$url_font = "/".$_POST['fuente'];

	$link="";
	$link = $model->url_landing_name."/".$model->id.$url_pais.$url_font;
	echo "<script>window.open('{$link}','_newtab');</script>";
}
$this->breadcrumbs=array(
	'Landings'=>array('index'),
	$model->title,
);


$this->menu=array(
	array('label'=>'Listar Landings', 'url'=>array('index')),
	array('label'=>'Nueva Landing', 'url'=>array('create')),
	array('label'=>'Editar Landing', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Landing', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Landings', 'url'=>array('admin')),
);
?>
<h1>Landing #<?php echo $model->id; ?></h1>
<form method="post">
	Pais:<select name="pais">
		<option value="ar">Argentina</option>
		<option value="cl">Chile</option>
		<option value="co">Colombia</option>
		<option value="ec">Ecuador</option>
		<option value="es">España</option>
		<option value="mx">México</option>
		<option value="ve">Venezuela</option>
	</select>
	Fuente:<select name="fuente">
		<option value="FB">Facebook</option>
		<option value="GG">Google</option>
		<option value="TV">Trovit</option>
		<option value="ML">Mercado Libre</option>
		<option value="AM">AlaMaula</option>
		<option value="TW">Twitter</option>
		<option value="OX">Olx</option>
		<option value="NX">Nexo Local</option>
		<option value="FBPH">Facebook Push</option>
		<option value="GGPH">Google Push</option>
	</select>

	<input type="submit" value="Ver Landing" />
	<input type="hidden" name="submit" value="1" />
</form>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_inmobiliaria',
		'title',
		'title_header',
		'title_footer',
		'legales',
		'img_background',
		'img_1',
		'img_2',
		'imag_3',
		'color_msg',
	),
)); ?>
