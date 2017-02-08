<?php

/**
 * This is the model class for table "sale".
 *
 * The followings are the available columns in table 'sale':
 * @property string $id
 * @property string $product_type
 * @property string $nozzle
 * @property string $mobil
 * @property string $opening_meter
 * @property string $closing_meter
 * @property string $sale_quantity
 * @property string $sale_price
 * @property string $sale_amount
 * @property string $remarks
 * @property integer $status
 * @property integer $deleted
 * @property string $created_by
 * @property string $updated_by
 * @property string $date_entered
 * @property string $date_modified
 */
class Sale extends AdminBaseModel
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sale';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, product_type, nozzle, opening_meter, closing_meter, sale_quantity, sale_price, sale_amount, created_by, updated_by, date_entered, date_modified', 'required'),
			array('status, deleted', 'numerical', 'integerOnly'=>true),
			array('id, product_type, nozzle, mobil, created_by, updated_by', 'length', 'max'=>36),
			array('opening_meter, closing_meter, sale_quantity, sale_price, sale_amount', 'length', 'max'=>11),
			array('remarks', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, product_type, nozzle, mobil, opening_meter, closing_meter, sale_quantity, sale_price, sale_amount, remarks, status, deleted, created_by, updated_by, date_entered, date_modified', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'product_type' => 'Product Type',
			'nozzle' => 'Nozzle',
			'mobil' => 'Mobil',
			'opening_meter' => 'Opening Meter',
			'closing_meter' => 'Closing Meter',
			'sale_quantity' => 'Sale Quantity',
			'sale_price' => 'Sale Price',
			'sale_amount' => 'Sale Amount',
			'remarks' => 'Remarks',
			'status' => 'Status',
			'deleted' => 'Deleted',
			'created_by' => 'Created By',
			'updated_by' => 'Updated By',
			'date_entered' => 'Date Entered',
			'date_modified' => 'Date Modified',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('product_type',$this->product_type,true);
		$criteria->compare('nozzle',$this->nozzle,true);
		$criteria->compare('mobil',$this->mobil,true);
		$criteria->compare('opening_meter',$this->opening_meter,true);
		$criteria->compare('closing_meter',$this->closing_meter,true);
		$criteria->compare('sale_quantity',$this->sale_quantity,true);
		$criteria->compare('sale_price',$this->sale_price,true);
		$criteria->compare('sale_amount',$this->sale_amount,true);
		$criteria->compare('remarks',$this->remarks,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('deleted',$this->deleted);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('updated_by',$this->updated_by,true);
		$criteria->compare('date_entered',$this->date_entered,true);
		$criteria->compare('date_modified',$this->date_modified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sale the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
