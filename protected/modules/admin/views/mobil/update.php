<?php
/* @var $this MobilController */
/* @var $model Mobil */

$this->breadcrumbs=array(
	'Mobils'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mobil', 'url'=>array('index')),
	array('label'=>'Create Mobil', 'url'=>array('create')),
	array('label'=>'View Mobil', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Mobil', 'url'=>array('admin')),
);
?>

<h1>Update Mobil <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>