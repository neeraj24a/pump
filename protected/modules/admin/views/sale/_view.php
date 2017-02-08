<?php
/* @var $this SaleController */
/* @var $data Sale */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_type')); ?>:</b>
	<?php echo CHtml::encode($data->product_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nozzle')); ?>:</b>
	<?php echo CHtml::encode($data->nozzle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobil')); ?>:</b>
	<?php echo CHtml::encode($data->mobil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('opening_meter')); ?>:</b>
	<?php echo CHtml::encode($data->opening_meter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('closing_meter')); ?>:</b>
	<?php echo CHtml::encode($data->closing_meter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sale_quantity')); ?>:</b>
	<?php echo CHtml::encode($data->sale_quantity); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('sale_price')); ?>:</b>
	<?php echo CHtml::encode($data->sale_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sale_amount')); ?>:</b>
	<?php echo CHtml::encode($data->sale_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remarks')); ?>:</b>
	<?php echo CHtml::encode($data->remarks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deleted')); ?>:</b>
	<?php echo CHtml::encode($data->deleted); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_by')); ?>:</b>
	<?php echo CHtml::encode($data->updated_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_entered')); ?>:</b>
	<?php echo CHtml::encode($data->date_entered); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_modified')); ?>:</b>
	<?php echo CHtml::encode($data->date_modified); ?>
	<br />

	*/ ?>

</div>