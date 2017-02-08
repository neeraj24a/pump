<?php

/**
 * This is the model class for table "transaction".
 *
 * The followings are the available columns in table 'transaction':
 * @property string $id
 * @property string $client
 * @property string $vehicle
 * @property string $product_type
 * @property string $quantity
 * @property string $rate
 * @property string $amount
 * @property string $type
 * @property string $remarks
 * @property integer $status
 * @property integer $deleted
 * @property string $created_by
 * @property string $updated_by
 * @property string $date_entered
 * @property string $date_modified
 */
class Transaction extends AdminBaseModel
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'transaction';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, client, vehicle, product_type, quantity, rate, amount, type, created_by, updated_by, date_entered, date_modified', 'required'),
			array('status, deleted', 'numerical', 'integerOnly'=>true),
			array('id, client, vehicle, product_type, created_by, updated_by', 'length', 'max'=>36),
			array('quantity', 'length', 'max'=>20),
			array('rate, amount', 'length', 'max'=>32),
			array('type', 'length', 'max'=>1),
			array('remarks', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, client, vehicle, product_type, quantity, rate, amount, type, remarks, status, deleted, created_by, updated_by, date_entered, date_modified', 'safe', 'on'=>'search'),
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
			'client' => 'Client',
			'vehicle' => 'Vehicle',
			'product_type' => 'Product Type',
			'quantity' => 'Quantity',
			'rate' => 'Rate',
			'amount' => 'Amount',
			'type' => 'Type',
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
		$criteria->compare('client',$this->client,true);
		$criteria->compare('vehicle',$this->vehicle,true);
		$criteria->compare('product_type',$this->product_type,true);
		$criteria->compare('quantity',$this->quantity,true);
		$criteria->compare('rate',$this->rate,true);
		$criteria->compare('amount',$this->amount,true);
		$criteria->compare('type',$this->type,true);
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
	 * @return Transaction the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
