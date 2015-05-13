<?php

/**
 * This is the model class for table "contact".
 *
 * The followings are the available columns in table 'contact':
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $comment
 * @property string $phone
 * @property string $model
 * @property string $country
 * @property string $states
 * @property string $font
 * @property integer $id_landing
 * @property integer $id_concesionaria
 * @property string $name_landing
 * @property string $name_concesionaria
 * @property integer $receive
 */
class Contact extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Contact the static model class
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
		return 'contact';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_landing, id_concesionaria, name_landing, name_concesionaria', 'required'),
			array('id_landing, id_concesionaria, receive', 'numerical', 'integerOnly'=>true),
			array('first_name, last_name, country, states', 'length', 'max'=>255),
			array('email, phone, name_landing, name_concesionaria', 'length', 'max'=>250),
			array('model, font', 'length', 'max'=>50),
			array('comment', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, first_name, last_name, email, comment, phone, model, country, states, font, id_landing, id_concesionaria, name_landing, name_concesionaria, receive', 'safe', 'on'=>'search'),
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
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'email' => 'Email',
			'comment' => 'Comment',
			'phone' => 'Phone',
			'model' => 'Model',
			'country' => 'Country',
			'states' => 'States',
			'font' => 'Font',
			'id_landing' => 'Id Landing',
			'id_concesionaria' => 'Id Concesionaria',
			'name_landing' => 'Name Landing',
			'name_concesionaria' => 'Name Concesionaria',
			'receive' => 'Receive',
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
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('comment',$this->comment,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('model',$this->model,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('states',$this->states,true);
		$criteria->compare('font',$this->font,true);
		$criteria->compare('id_landing',$this->id_landing);
		$criteria->compare('id_concesionaria',$this->id_concesionaria);
		$criteria->compare('name_landing',$this->name_landing,true);
		$criteria->compare('name_concesionaria',$this->name_concesionaria,true);
		$criteria->compare('receive',$this->receive);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}