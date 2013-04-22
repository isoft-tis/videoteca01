<?php

/**
 * This is the model class for table "pdf".
 *
 * The followings are the available columns in table 'pdf':
 * @property string $id_pdf
 * @property string $estudiante_id_est
 * @property string $area_pdf
 */
class Pdf extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pdf the static model class
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
		return 'pdf';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('estudiante_id_est, area_pdf', 'required'),
			array('estudiante_id_est', 'length', 'max'=>10),
			array('area_pdf', 'length', 'max'=>80),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_pdf, estudiante_id_est, area_pdf', 'safe', 'on'=>'search'),
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
			'id_pdf' => 'Id Pdf',
			'estudiante_id_est' => 'Estudiante Id Est',
			'area_pdf' => 'Area Pdf',
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

		$criteria->compare('id_pdf',$this->id_pdf,true);
		$criteria->compare('estudiante_id_est',$this->estudiante_id_est,true);
		$criteria->compare('area_pdf',$this->area_pdf,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}