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
			<?php echo $form->dropDownList($model,'product_type',$products,
						array(
							'empty'=>'Select Product',
							'class' => 'form-control',
							'ajax' => array(
										'type'=>'POST', 
										'url'=>Yii::app()->createUrl('admin/sale/loadnozzles'), //or $this->createUrl('loadcities') if '$this' extends CController
										'update'=>'#Sale_nozzle', //or 'success' => 'function(data){...handle the data in the way you want...}',
										'data'=>array('product'=>'js:this.value'),
									)
						  )); ?>
		</div>
		<div class="col-xs-4">
			<?php echo $form->label($model,'nozzle'); ?>
			<?php echo $form->dropDownList($model,'nozzle',[],array('empty' => "Select Nozzle",'class' => 'form-control')); ?>
		</div>
		<div class="col-xs-4">
			<?php echo $form->label($model,'date_entered'); ?>
			<?php echo $form->textField($model,'date_entered',array('size'=>60,'maxlength'=>255,'class' => 'form-control bootstrap-datepicker')); ?>
		</div>
	</div>
</div>
<div class="box-footer">
	<?php echo CHtml::submitButton('Search',array("class" => 'btn btn-info search-button')); ?>
	<a href="<?php echo base_url().'/admin/sale/manage' ?>" class="btn btn-warning">Clear</a>
</div>
<?php $this->endWidget(); ?>
