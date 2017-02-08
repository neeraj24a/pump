<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
	'htmlOptions'=>array('class' => 'search-form')
)); ?>
<div class="box-body">
	<div class="form-group">
		<div class="col-xs-4">
			<?php echo $form->label($model,'client'); ?>
			<?php 
				$all_clients = Client::model()->findAll(); 
				$clients = CHtml::listData($all_clients, 'id', 'name'); 
			?>
			<?php echo $form->dropDownList($model,'client',$clients,array('empty' => "Select Client",'class' => 'form-control')); ?>
		</div>
		<div class="col-xs-4">
			<?php echo $form->label($model,'name'); ?>
			<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255,'class' => 'form-control')); ?>
		</div>
		<div class="col-xs-4">
			<?php echo $form->label($model,'number'); ?>
			<?php echo $form->textField($model,'number',array('size'=>15,'maxlength'=>255,'class' => 'form-control')); ?>
		</div>
	</div>
</div>
<div class="box-footer">
	<?php echo CHtml::submitButton('Search',array("class" => 'btn btn-info search-button')); ?>
	<a href="<?php echo base_url().'/admin/vehicle/manage' ?>" class="btn btn-warning">Clear</a>
</div>
<?php $this->endWidget(); ?>