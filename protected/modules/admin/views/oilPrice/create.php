<?php
/* @var $this OilPriceController */
/* @var $model OilPrice */

$this->breadcrumbs=array(
	'Oil Prices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OilPrice', 'url'=>array('index')),
	array('label'=>'Manage OilPrice', 'url'=>array('admin')),
);
?>

<h1>Create OilPrice</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>