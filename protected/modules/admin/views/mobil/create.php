<?php
/* @var $this MobilController */
/* @var $model Mobil */

$this->breadcrumbs=array(
	'Mobils'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mobil', 'url'=>array('index')),
	array('label'=>'Manage Mobil', 'url'=>array('admin')),
);
?>

<h1>Create Mobil</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>