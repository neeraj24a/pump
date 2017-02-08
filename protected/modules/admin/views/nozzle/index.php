<?php
/* @var $this NozzleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Nozzles',
);

$this->menu=array(
	array('label'=>'Create Nozzle', 'url'=>array('create')),
	array('label'=>'Manage Nozzle', 'url'=>array('admin')),
);
?>

<h1>Nozzles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
