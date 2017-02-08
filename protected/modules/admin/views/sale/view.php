<section class="content-header">
    <h1>
        Sale
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url() . '/admin/dashboard'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?php echo base_url() . '/admin/sale'; ?>"><i class="fa fa-dashboard"></i> Sale</a></li>
        <li class="active">View</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        <?php
						$date = strtotime( $model->date_entered );
						$date = date( 'd-m-Y', $date );
					?>
					Sale For Date: <?php echo $date; ?>
                        <small>
                            <a href="<?php echo base_url() . '/admin/sale/update?id=' . $model->id; ?>">EDIT</a>
                        </small>
                    </h3>
                </div>
                <div class="box-body">
                    <div class="col-xs-12 table-responsive">
                        <?php
						$model->product_type = ProductType::model()->findByPk($model->product_type)->name;
                        $model->nozzle = Nozzle::model()->findByPk($model->nozzle)->name;
						$this->widget('zii.widgets.CDetailView', array(
                            // 'itemsCssClass' => 'table table-bordered table-hover dataTable',
                            'htmlOptions' => array("class" => "table table-bordered table-hover dataTable"),
                            'data' => $model,
                            'attributes' => array(
                                'product_type',
								'nozzle',
								'opening_meter',
								'closing_meter',
								'sale_quantity',
								'sale_price',
								'sale_amount',
								'remarks',
							),
                        ));
                        ?>
                        <div class="col-xs-12">
                            <?php echo CHtml::link('Back', array('/admin/sale'), array("class" => 'btn btn-info pull-right', "style" => "margin-left:10px;")); ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
