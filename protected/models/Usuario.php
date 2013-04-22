<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property string $codsis_usr
 * @property string $ci_usr
 * @property string $nombre_usr
 * @property string $apellido_pat_usr
 * @property string $apellido_mat_usr
 * @property string $direccion_usr
 * @property string $telefono_usr
 * @property string $correo_usr
 * @property string $login_usr
 * @property string $password_usr
 */
class Usuario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuario the static model class
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
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codsis_usr, ci_usr, nombre_usr, apellido_pat_usr, apellido_mat_usr, telefono_usr, correo_usr, login_usr, password_usr', 'required'),
			array('codsis_usr', 'length', 'max'=>10),
			array('ci_usr, nombre_usr, apellido_pat_usr, apellido_mat_usr, direccion_usr, telefono_usr, correo_usr, login_usr, password_usr', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('codsis_usr, ci_usr, nombre_usr, apellido_pat_usr, apellido_mat_usr, direccion_usr, telefono_usr, correo_usr, login_usr, password_usr', 'safe', 'on'=>'search'),
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
			'codsis_usr' => 'Codsis Usr',
			'ci_usr' => 'Ci Usr',
			'nombre_usr' => 'Nombre Usr',
			'apellido_pat_usr' => 'Apellido Pat Usr',
			'apellido_mat_usr' => 'Apellido Mat Usr',
			'direccion_usr' => 'Direccion Usr',
			'telefono_usr' => 'Telefono Usr',
			'correo_usr' => 'Correo Usr',
			'login_usr' => 'Login Usr',
			'password_usr' => 'Password Usr',
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

		$criteria->compare('codsis_usr',$this->codsis_usr,true);
		$criteria->compare('ci_usr',$this->ci_usr,true);
		$criteria->compare('nombre_usr',$this->nombre_usr,true);
		$criteria->compare('apellido_pat_usr',$this->apellido_pat_usr,true);
		$criteria->compare('apellido_mat_usr',$this->apellido_mat_usr,true);
		$criteria->compare('direccion_usr',$this->direccion_usr,true);
		$criteria->compare('telefono_usr',$this->telefono_usr,true);
		$criteria->compare('correo_usr',$this->correo_usr,true);
		$criteria->compare('login_usr',$this->login_usr,true);
		$criteria->compare('password_usr',$this->password_usr,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}