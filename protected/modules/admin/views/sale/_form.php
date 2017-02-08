<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sale-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<div class="box-body">
	<div class="form-group">
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'product_type'); ?>
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
			<?php echo $form->error($model,'product_type'); ?>
		</div>
		<div class="col-xs-6">
			<?php echo $form->label($model,'nozzle'); ?>
			<?php echo $form->dropDownList($model,'nozzle',[],array('empty' => "Select Nozzle",'class' => 'form-control')); ?>
			<?php echo $form->error($model,'nozzle'); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'opening_meter'); ?>
			<?php echo $form->textField($model,'opening_meter',array('size'=>11,'maxlength'=>11,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'opening_meter'); ?>
		</div>
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'closing_meter'); ?>
			<?php echo $form->textField($model,'closing_meter',array('size'=>11,'maxlength'=>11,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'closing_meter'); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'sale_price'); ?>
			<input type="text" class="form-control" id="sale_price" value="<?php echo $model->sale_price; ?>" disabled="disabled" />
			<?php echo $form->hiddenField($model,'sale_price',array('size'=>11,'maxlength'=>11, 'class' => 'form-control')); ?>
			<?php echo $form->error($model,'sale_price'); ?>
		</div>
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'sale_amount'); ?>
			<?php echo $form->textField($model,'sale_amount',array('size'=>11,'maxlength'=>11,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'sale_amount'); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-6">
			<?php echo $form->labelEx($model,'sale_quantity'); ?>
			<input type="text" class="form-control" id="sale_quantity" value="<?php echo $model->sale_quantity; ?>" disabled="disabled" />
			<?php echo $form->hiddenField($model,'sale_quantity',array('size'=>11,'maxlength'=>11,'class' => 'form-control')); ?>
			<?php echo $form->error($model,'sale_quantity'); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-xs-12">
			<?php echo $form->labelEx($model,'remarks'); ?>
			<?php echo $form->textArea($model,'remarks',array('size'=>'60','class' => 'form-control')); ?>
			<?php echo $form->error($model,'remarks'); ?>
		</div>
	</div>
</div>
<div class="box-footer">
    <?php echo CHtml::link('Back', array('/admin/sale'), array("class" => 'btn btn-info pull-right', "style" => "margin-left:10px;")); ?>
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array("class" => 'btn btn-info pull-right')); ?>
</div>
<?php $this->endWidget(); ?>

<script>
	$(document).ready(function(){
		var open = $("#Sale_opening_meter").val();
		var close = $("#Sale_closing_meter").val();
		$("#Sale_opening_meter, #Sale_closing_meter").on("blur", function(){
			var open = $("#Sale_opening_meter").val();
			var close = $("#Sale_closing_meter").val();
			if(open != "" && close != ""){
				var diff = parseFloat(close) - parseFloat(open);
				$("#sale_quantity").val(diff);
				$("#Sale_sale_quantity").val(diff);
			}
		});
	});
<?php if(isset($model->product_type)): ?>
/*<![CDATA[*/
jQuery(function($) {
	var nozzle = '<?php echo $model->nozzle; ?>';	
	jQuery.ajax({
		'type':'POST',
		'url':'<?php echo Yii::app()->createUrl('admin/sale/loadnozzles'); ?>',
		'data':{'product':'<?php echo $model->product_type; ?>'},
		'cache':false,
		'success':function(html){
			jQuery("#Sale_nozzle").html(html);
			jQuery("#Sale_nozzle").val(nozzle);
		}
	});	
});
/*]]>*/
/*<![CDATA[*/
jQuery(function($) {
	jQuery.ajax({
		'type':'POST',
		'url':'<?php echo Yii::app()->createUrl('admin/sale/saleprice'); ?>',
		'data':{'product':'<?php echo $model->product_type; ?>'},
		'cache':false,
		'success':function(data){
			jQuery("#Sale_sale_price").val(data);
			jQuery("#sale_price").val(data);
		}
	});	
});
/*]]>*/
<?php endif; ?>
/*<![CDATA[*/
jQuery(function($) {
	jQuery("#Sale_product_type").on("change",function(){
		if(jQuery(this).val() != ""){
			var product = jQuery(this).val();
			jQuery.ajax({
				'type':'POST',
				'url':'<?php echo Yii::app()->createUrl('admin/sale/saleprice'); ?>',
				'data':{'product':product},
				'cache':false,
				'success':function(data){
					jQuery("#Sale_sale_price").val(data);
					jQuery("#sale_price").val(data);
				}
			});
		} else {
			jQuery("#Sale_sale_price").val("");
			jQuery("#sale_price").val("");
		}
	});		
});
/*]]>*/
</script>