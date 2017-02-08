<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions'=>array('class' => 'search-form')
)); ?>
<div class="box-body">
	<div class="form-group">
		<div class="col-xs-4">
			<?php echo $form->label($model,'product_type'); ?>
			<?php 
				$all = ProductType::model()->findAll(); 
				$products = CHtml::listData($all, 'id', 'name'); 
			?>
			<?php echo $form->dropDownList($model,'product_type',$products,array('empty' => "Select Product",'class' => 'form-control')); ?>
		</div>
	</div>
</div>
<div class="box-footer">
	<?php echo CHtml::submitButton('Search',array("class" => 'btn btn-info search-button')); ?>
	<a href="<?php echo base_url().'/admin/commission/manage' ?>" class="btn btn-warning">Clear</a>
</div>
<?php $this->endWidget(); ?>
