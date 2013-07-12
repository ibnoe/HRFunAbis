<?php

/**
 * This is the model class for table "sppd_letter_cost".
 *
 * The followings are the available columns in table 'sppd_letter_cost':
 * @property integer $id
 * @property integer $airport_tax_cost
 * @property integer $airport_tax_quantity
 * @property integer $laundry_cost
 * @property integer $laundry_quantity
 * @property integer $airline_cost
 * @property integer $airline_quantity
 * @property integer $hotel_cost
 * @property integer $hotel_quantity
 * @property integer $transportation_cost
 * @property integer $transportation_quantity
 * @property integer $from_to_cost
 * @property integer $from_to_quantity
 * @property integer $lumpsum_cost
 * @property integer $lumpsum_quantity
 * @property string $created_date
 * @property string $created_by
 */
class LetterCost extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return LetterCost the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sppd_letter_cost';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('airport_tax_cost, airport_tax_quantity, laundry_cost, laundry_quantity, airline_cost, airline_quantity, hotel_cost, hotel_quantity, transportation_cost, transportation_quantity, from_to_cost, from_to_quantity, lumpsum_cost, lumpsum_quantity, created_date, created_by', 'required'),
			array('airport_tax_cost, airport_tax_quantity, laundry_cost, laundry_quantity, airline_cost, airline_quantity, hotel_cost, hotel_quantity, transportation_cost, transportation_quantity, from_to_cost, from_to_quantity, lumpsum_cost, lumpsum_quantity', 'numerical', 'integerOnly'=>true),
			array('created_by', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, airport_tax_cost, airport_tax_quantity, laundry_cost, laundry_quantity, airline_cost, airline_quantity, hotel_cost, hotel_quantity, transportation_cost, transportation_quantity, from_to_cost, from_to_quantity, lumpsum_cost, lumpsum_quantity, created_date, created_by', 'safe', 'on'=>'search'),
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
			'airport_tax_cost' => 'Airport Tax Cost',
			'airport_tax_quantity' => 'Airport Tax Quantity',
			'laundry_cost' => 'Laundry Cost',
			'laundry_quantity' => 'Laundry Quantity',
			'airline_cost' => 'Airline Cost',
			'airline_quantity' => 'Airline Quantity',
			'hotel_cost' => 'Hotel Cost',
			'hotel_quantity' => 'Hotel Quantity',
			'transportation_cost' => 'Transportation Cost',
			'transportation_quantity' => 'Transportation Quantity',
			'from_to_cost' => 'From To Cost',
			'from_to_quantity' => 'From To Quantity',
			'lumpsum_cost' => 'Lumpsum Cost',
			'lumpsum_quantity' => 'Lumpsum Quantity',
			'created_date' => 'Created Date',
			'created_by' => 'Created By',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('airport_tax_cost',$this->airport_tax_cost);
		$criteria->compare('airport_tax_quantity',$this->airport_tax_quantity);
		$criteria->compare('laundry_cost',$this->laundry_cost);
		$criteria->compare('laundry_quantity',$this->laundry_quantity);
		$criteria->compare('airline_cost',$this->airline_cost);
		$criteria->compare('airline_quantity',$this->airline_quantity);
		$criteria->compare('hotel_cost',$this->hotel_cost);
		$criteria->compare('hotel_quantity',$this->hotel_quantity);
		$criteria->compare('transportation_cost',$this->transportation_cost);
		$criteria->compare('transportation_quantity',$this->transportation_quantity);
		$criteria->compare('from_to_cost',$this->from_to_cost);
		$criteria->compare('from_to_quantity',$this->from_to_quantity);
		$criteria->compare('lumpsum_cost',$this->lumpsum_cost);
		$criteria->compare('lumpsum_quantity',$this->lumpsum_quantity);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('created_by',$this->created_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}