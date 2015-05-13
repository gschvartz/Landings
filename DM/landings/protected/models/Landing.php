<?php

/**
 * This is the model class for table "landing".
 *
 * The followings are the available columns in table 'landing':
 * @property integer $id
 * @property integer $id_concesionaria
 * @property string $title
 * @property string $title_header
 * @property string $title_footer
  * @property string $content
 * @property string $legales
 * @property string $img_background
 * @property string $img_1
 * @property string $img_2
 * @property string $imag_3
 * @property string $color_head
 * @property string $color_foot
 * @property string $color_legales
 * @property string $font1
 * @property string $font2
 * @property string $color_msg
 * @property string $adwords_code
 * @property string $allow_state
 * @property string $allow_models
 * @property string $allow_comment
 *
 * The followings are the available model relations:
 * @property Concesionaria $idConcesionaria
 */
class Landing extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Landing the static model class
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
		return 'landing';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_concesionaria, title', 'required'),
			array('id_concesionaria', 'numerical', 'integerOnly'=>true),
			array('title, title_header, title_footer', 'length', 'max'=>1000),
			array('img_background, img_1, img_2, imag_3, color_head, color_content, color_background_content, color_foot, color_legales, font_content, font1, font2', 'length', 'max'=>250),
			array('color_msg, allow_state, allow_models, allow_comment', 'length', 'max'=>50),
			array('legales', 'safe'),
			array('content', 'safe'),
			array('adwords_code', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_concesionaria, title, title_header, title_footer, legales, adwords_code, img_background, img_1, img_2, imag_3, color_head, color_foot, color_legales, font1, font2, color_msg, allow_state, allow_models, allow_comment', 'safe', 'on'=>'search'),
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
			'idConcesionaria' => array(self::BELONGS_TO, 'Concesionaria', 'id_concesionaria'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_concesionaria' => 'Id Concesionaria',
			'title' => 'Title',
			'title_header' => 'Title Header',
			'content' => 'Content',
			'title_footer' => 'SubTitle',
			'legales' => 'Legales',
			'adwords_code' => 'Codigo Adwords',
			'img_background' => 'Img Background',
			'img_1' => 'Img 1',
			'img_2' => 'Img 2',
			'imag_3' => 'Imag 3',
			'color_head' => 'Color Head',
			'color_foot' => 'Color Foot',
			'color_legales' => 'Color Legales',
			'color_content' => 'Color Content',
			'font1' => 'Font1',
			'font2' => 'Font2',
			'font_content' => 'Font Size Content',
			'color_msg' => 'Color Msg',
			'color_content' => 'Color Contenido',
			'color_background_content' => 'Background Contenido',
			'allow_state' => 'Ver Provincias', 
			'allow_models' => 'Ver Modelos',
			'allow_comment' => 'Ver Comentario'
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
		$criteria->compare('id_concesionaria',$this->id_concesionaria);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('title_header',$this->title_header,true);
		$criteria->compare('title_footer',$this->title_footer,true);
		$criteria->compare('legales',$this->legales,true);
		$criteria->compare('adwords_code',$this->adwords_code,true);
		$criteria->compare('img_background',$this->img_background,true);
		$criteria->compare('img_1',$this->img_1,true);
		$criteria->compare('img_2',$this->img_2,true);
		$criteria->compare('imag_3',$this->imag_3,true);
		$criteria->compare('color_head',$this->color_head,true);
		$criteria->compare('color_foot',$this->color_foot,true);
		$criteria->compare('color_legales',$this->color_legales,true);
		$criteria->compare('font1',$this->font1,true);
		$criteria->compare('font2',$this->font2,true);
		$criteria->compare('color_msg',$this->color_msg,true);
		$criteria->compare('allow_state',$this->allow_state,true);
		$criteria->compare('allow_models',$this->allow_models,true);
		$criteria->compare('allow_comment',$this->allow_comment,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array('pageSize'=>20),
		));
	}
}