<?php

/**
 * This is the model class for table "video".
 *
 * The followings are the available columns in table 'video':
 * @property string $id_video
 * @property string $estudiante_id_est
 * @property string $introduccion_vid
 * @property string $duracion_vid
 * @property string $idioma_vid
 * @property string $tamano_vid
 * @property string $formato_vid
 * @property string $calidad_vid
 * @property string $enlace_vid
 * @property string $fecha_pub_vid
 */
class Video extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Video the static model class
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
		return 'video';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('estudiante_id_est, introduccion_vid, duracion_vid, idioma_vid, tamano_vid, formato_vid, calidad_vid, enlace_vid, fecha_pub_vid', 'required'),
			array('estudiante_id_est', 'length', 'max'=>10),
			array('introduccion_vid', 'length', 'max'=>200),
			array('idioma_vid, tamano_vid, formato_vid, calidad_vid, enlace_vid', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_video, estudiante_id_est, introduccion_vid, duracion_vid, idioma_vid, tamano_vid, formato_vid, calidad_vid, enlace_vid, fecha_pub_vid', 'safe', 'on'=>'search'),
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
			'id_video' => 'Id Video',
			'estudiante_id_est' => 'Estudiante Id Est',
			'introduccion_vid' => 'Introduccion Vid',
			'duracion_vid' => 'Duracion Vid',
			'idioma_vid' => 'Idioma Vid',
			'tamano_vid' => 'Tamano Vid',
			'formato_vid' => 'Formato Vid',
			'calidad_vid' => 'Calidad Vid',
			'enlace_vid' => 'Enlace Vid',
			'fecha_pub_vid' => 'Fecha Pub Vid',
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

		$criteria->compare('id_video',$this->id_video,true);
		$criteria->compare('estudiante_id_est',$this->estudiante_id_est,true);
		$criteria->compare('introduccion_vid',$this->introduccion_vid,true);
		$criteria->compare('duracion_vid',$this->duracion_vid,true);
		$criteria->compare('idioma_vid',$this->idioma_vid,true);
		$criteria->compare('tamano_vid',$this->tamano_vid,true);
		$criteria->compare('formato_vid',$this->formato_vid,true);
		$criteria->compare('calidad_vid',$this->calidad_vid,true);
		$criteria->compare('enlace_vid',$this->enlace_vid,true);
		$criteria->compare('fecha_pub_vid',$this->fecha_pub_vid,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}