<?php
/* @var $this MobilController */
/* @var $model Mobil */

$this->breadcrumbs=array(
	'Mobils'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Mobil', 'url'=>array('index')),
	array('label'=>'Create Mobil', 'url'=>array('create')),
	array('label'=>'Update Mobil', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Mobil', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mobil', 'url'=>array('admin')),
);
?>

<h1>View Mobil #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'status',
		'deleted',
		'created_by',
		'updated_by',
		'date_entered',
		'date_modified',
	),
)); ?>
