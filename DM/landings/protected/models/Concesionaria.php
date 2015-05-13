<?php

/**
 * This is the model class for table "concesionaria".
 *
 * The followings are the available columns in table 'concesionaria':
 * @property integer $id
 * @property string $name
 * @property string $models
 * @property string $img_background
 * @property string $email
 * @property string $adwords_code
 * @property string $legales
 *
 * The followings are the available model relations:
 * @property Landing[] $landings
 */
class Concesionaria extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Concesionaria the static model class
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
		return 'concesionaria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, email', 'required'),
			array('idu_site', 'length', 'max'=>10),
			array('name, email', 'length', 'max'=>128),
			array('models', 'length', 'max'=>500),
			array('adwords_code, legales', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, idu_site, name, models, email', 'safe', 'on'=>'search'),
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
			'landings' => array(self::HAS_MANY, 'Landing', 'id_concesionaria'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'idu_site' => 'IDU DM',
			'name' => 'Name',
			'models' => 'Models',
			'email' => 'Email',
			'adwords_code' => 'Codigo Adwords',
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
		$criteria->compare('idu_site',$this->idu_site);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('models',$this->models,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('adwords_code',$this->adwords_code,true);
		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array('pageSize'=>20),
		));
	}
}