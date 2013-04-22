<?php

/**
 * This is the model class for table "docente".
 *
 * The followings are the available columns in table 'docente':
 * @property string $id_docente
 * @property string $usuario_codsis_usr
 * @property string $carrera_doc
 */
class Docente extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Docente the static model class
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
		return 'docente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usuario_codsis_usr', 'required'),
			array('usuario_codsis_usr', 'length', 'max'=>10),
			array('carrera_doc', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_docente, usuario_codsis_usr, carrera_doc', 'safe', 'on'=>'search'),
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
			'id_docente' => 'Id Docente',
			'usuario_codsis_usr' => 'Usuario Codsis Usr',
			'carrera_doc' => 'Carrera Doc',
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

		$criteria->compare('id_docente',$this->id_docente,true);
		$criteria->compare('usuario_codsis_usr',$this->usuario_codsis_usr,true);
		$criteria->compare('carrera_doc',$this->carrera_doc,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}