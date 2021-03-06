<section class="content-header">
    <h1>
        Manage
        <small>Commission</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url() . '/admin/dashboard'; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="<?php echo base_url() . '/admin/commission'; ?>"><i class="fa fa-dashboard"></i> Commission</a></li>
        <li class="active">Manage</li>
    </ol>
</section>
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Search</h3>
                </div>
                <?php
                Yii::app()->clientScript->registerScript('search', "
						$('form.search-form').submit(function(){
							$('#commission-grid').yiiGridView('update', {
								data: $(this).serialize()
							});
							return false;
						});
						");
                $this->renderPartial('_search', array(
                    'model' => $model,
                ));
                ?>
            </div>
            <div class="box">
                <div class="box-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="box-title">Commission List</h3>
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="dataTables_wrapper form-inline dt-bootstrap">

                        <div class="row">
                            <div class="col-sm-12 table-responsive">
                                <?php
                                $this->widget('zii.widgets.grid.CGridView', array(
                                    'id'=>'commission-grid',
                                    'itemsCssClass' => 'table table-bordered table-hover dataTable',
                                    'dataProvider' => $model->search(),
                                    'enablePagination' => true,
                                    // 'filter'=>$model,
                                    'columns' => array(
                                        array(
                                            'name' => 'Product',
                                            'value' => array($this, 'getProduct'),
                                        ),
										'amount',
                                        array(
                                            'class' => 'CButtonColumn',
                                            'template' => '{v} {u}', // <-- TEMPLATE WITH THE TWO STATES
                                            'htmlOptions' => array(
                                                'width' => 80,
                                            ),
                                            'buttons' => array(
                                                'v' => array(
                                                    'label' => '<i class="fa fa-search"></i>',
                                                    'url' => 'Yii::app()->createUrl("admin/commission/view", array("id"=>$data->id))',
                                                    'options' => array('class' => 'view', 'title' => 'View'),
                                                ),
                                                'u' => array(
                                                    'label' => '<i class="fa fa-edit"></i>',
                                                    'url' => 'Yii::app()->createUrl("admin/commission/update", array("id"=>$data->id))',
                                                    'options' => array('class' => 'edit', 'title' => 'Update'),
                                                ),
                                            ),
                                        )
                                    ),
                                ));
                                ?>
                            </div>
                        </div>
                        <div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
