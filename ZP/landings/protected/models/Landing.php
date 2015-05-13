<?php

/**
 * This is the model class for table "landing".
 *
 * The followings are the available columns in table 'landing':
 * @property integer $id
 * @property integer $id_inmobiliaria
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
 *
 * The followings are the available model relations:
 * @property Inmobiliaria $idInmobiliaria
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
			array('id_inmobiliaria, title, url_landing_name', 'required'),
			array('id_inmobiliaria', 'numerical', 'integerOnly'=>true),
			array('title, title_header, title_footer, font_header_google, font_footer_google, font_content_google', 'length', 'max'=>1000),
			array('img_background, img_1, img_2, imag_3, color_head, color_content, color_background_content, color_foot, color_legales, font_content, font1, font2, content_select', 'length', 'max'=>250),
			array('url_landing_name', 'length', 'max'=>25),
			array('color_msg, lbl_select, country, allow_select, show_states', 'length', 'max'=>50),
			array('font_family_header, font_family_footer, font_family_content', 'length', 'max'=>500),
			array('legales', 'safe'),
			array('content', 'safe'),
			array('adwords', 'safe'),
			array('facebook', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_inmobiliaria, title, title_header, title_footer, legales, img_background, img_1, img_2, imag_3, color_head, color_foot, color_legales, font1, font2, color_msg, url_landing_name', 'safe', 'on'=>'search'),
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
			'idInmobiliaria' => array(self::BELONGS_TO, 'Inmobiliaria', 'id_inmobiliaria'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_inmobiliaria' => 'Id Inmobiliaria',
			'title' => 'Title',
			'title_header' => 'Title Header',
			'content' => 'Content',
			'title_footer' => 'SubTitle',
			'legales' => 'Legales',
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
			'adwords' => 'Adwords Code',
			'facebook' => 'Facebook Code',
			'font_header_google' => 'Fuente Google Header',
			'font_family_header' => 'Font-Family Header',
			'font_footer_google' => 'Fuente Google Footer',
			'font_family_footer' => 'Font-Family Footer',
			'font_content_google' => 'Fuente Google Content',
			'font_family_content' => 'Font-Family Content',
			'allow_select' => 'Ver Campo Extra',
			'lbl_select' => 'Etiqueta Campo Extra',
			'content_select' => 'Valores Campo',
			'country' => 'Pais',
			'show_states' => 'Habilitar Provincias',
			'url_landing_name' => 'Nombre URL',
			
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
		$criteria->compare('id_inmobiliaria',$this->id_inmobiliaria);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('title_header',$this->title_header,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('title_footer',$this->title_footer,true);
		$criteria->compare('legales',$this->legales,true);
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
		$criteria->compare('adwords',$this->adwords,true);
		$criteria->compare('facebook',$this->facebook,true);
		$criteria->compare('font_header_google',$this->font_header_google,true);
		$criteria->compare('font_family_header',$this->font_family_header,true);
		$criteria->compare('font_footer_google',$this->font_footer_google,true);
		$criteria->compare('font_family_footer',$this->font_family_footer,true);
		$criteria->compare('font_content_google',$this->font_content_google,true);
		$criteria->compare('font_family_content',$this->font_family_content,true);
		$criteria->compare('allow_select',$this->allow_select,true);
		$criteria->compare('lbl_select',$this->lbl_select,true);
		$criteria->compare('content_select',$this->content_select,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('show_states',$this->show_states,true);
		$criteria->compare('url_landing_name',$this->url_landing_name,true);
		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array('pageSize'=>20),
		));
	}
}