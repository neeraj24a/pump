<?php
/* @var $this OilPriceController */
/* @var $model OilPrice */

$this->breadcrumbs=array(
	'Oil Prices'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OilPrice', 'url'=>array('index')),
	array('label'=>'Create OilPrice', 'url'=>array('create')),
	array('label'=>'View OilPrice', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage OilPrice', 'url'=>array('admin')),
);
?>

<h1>Update OilPrice <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>