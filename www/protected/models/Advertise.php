<?php

/**
 * This is the model class for table "tbl_advertise".
 *
 * The followings are the available columns in table 'tbl_advertise':
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property integer $category_id
 * @property string $created
 * @property integer $is_accepted
 * @property integer $count_views
 * @property integer $delta
 */
class Advertise extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_advertise';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category_id, is_accepted, count_views, delta', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>1024),
			array('description, created', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, description, category_id, created, is_accepted, count_views, delta', 'safe', 'on'=>'search'),
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
			'title' => 'Заголовок объявления',
			'description' => 'Текст объявления',
			'category_id' => 'Категория',
			'created' => 'Время создания',
			'is_accepted' => 'Проверен модератором',
			'count_views' => 'Количество просмотров',
			'delta' => 'Позиция',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('is_accepted',$this->is_accepted);
		$criteria->compare('count_views',$this->count_views);
		$criteria->compare('delta',$this->delta);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Advertise the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
