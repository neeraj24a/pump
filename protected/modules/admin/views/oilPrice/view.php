<?php
/* @var $this OilPriceController */
/* @var $model OilPrice */

$this->breadcrumbs=array(
	'Oil Prices'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List OilPrice', 'url'=>array('index')),
	array('label'=>'Create OilPrice', 'url'=>array('create')),
	array('label'=>'Update OilPrice', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete OilPrice', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OilPrice', 'url'=>array('admin')),
);
?>

<h1>View OilPrice #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'product_type',
		'price',
		'status',
		'deleted',
		'created_by',
		'updated_by',
		'date_entered',
		'date_modified',
	),
)); ?>
