<?php
/* @var $this OilPriceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Oil Prices',
);

$this->menu=array(
	array('label'=>'Create OilPrice', 'url'=>array('create')),
	array('label'=>'Manage OilPrice', 'url'=>array('admin')),
);
?>

<h1>Oil Prices</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
