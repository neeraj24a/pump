<?php
/* @var $this MobilController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mobils',
);

$this->menu=array(
	array('label'=>'Create Mobil', 'url'=>array('create')),
	array('label'=>'Manage Mobil', 'url'=>array('admin')),
);
?>

<h1>Mobils</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
