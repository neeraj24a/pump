<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vehicle-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<div class="box-body">
	<div class="form-group">
		<div class="col-xs-4">
			<?php echo $form->labelEx($model,'client'); ?>
			<?php 
				$all_clients = Client::model()->findAll(); 
				$clients = CHtml::listData($all_clients, 'id', 'name'); 
			?>
			<?php echo $form->dropDownList($model,'client',$clients,array('empty' => "Select Client",'class' => 'form-control')); ?>
			<?php echo $form->error($model,'client'); ?>
		</div>
		<div class="col-xs-4">
			<?php echo $form->labelEx($model,'name'); ?>
			<?php echo $form->textField($model,'name',array('size'=>'60','maxlength'=>'128','class' => 'form-control')); ?>
			<?php echo $form->error($model,'name'); ?>
		</div>
		<div class="col-xs-4">
			<?php echo $form->labelEx($model,'number'); ?>
			<?php echo $form->textField($model,'number',array('size'=>'60','maxlength'=>'15','class' => 'form-control')); ?>
			<?php echo $form->error($model,'number'); ?>
		</div>
	</div>
</div>
<div class="box-footer">
    <?php echo CHtml::link('Back', array('/admin/vehicle'), array("class" => 'btn btn-info pull-right', "style" => "margin-left:10px;")); ?>
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array("class" => 'btn btn-info pull-right')); ?>
</div>
<?php $this->endWidget(); ?>