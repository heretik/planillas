<?php

/**
 * This is the model base class for the table "usu_est_pla".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "UsuEstPla".
 *
 * Columns in table "usu_est_pla" available as properties of the model,
 * followed by relations of table "usu_est_pla" available as properties of the model.
 *
 * @property integer $id_usu_est_pla
 * @property integer $id_usuario
 * @property integer $id_establecimiento
 * @property integer $id_tipo_planilla
 * @property integer $id_localizacion
 *
 * @property Establecimiento $idEstablecimiento
 * @property User $idUsuario
 * @property TipoPlanilla $idTipoPlanilla
 * @property Localizacion $idLocalizacion
 */
abstract class BaseUsuEstPla extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'usu_est_pla';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'UsuEstPla|UsuEstPlas', $n);
	}

	public static function representingColumn() {
		return 'id_usu_est_pla';
	}

	public function rules() {
		return array(
			array('id_usuario, id_establecimiento, id_tipo_planilla, id_localizacion', 'numerical', 'integerOnly'=>true),
			array('id_usuario, id_establecimiento, id_tipo_planilla, id_localizacion', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id_usu_est_pla, id_usuario, id_establecimiento, id_tipo_planilla, id_localizacion', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'idEstablecimiento' => array(self::BELONGS_TO, 'Establecimiento', 'id_establecimiento'),
			'idUsuario' => array(self::BELONGS_TO, 'User', 'id_usuario'),
			'idTipoPlanilla' => array(self::BELONGS_TO, 'TipoPlanilla', 'id_tipo_planilla'),
			'idLocalizacion' => array(self::BELONGS_TO, 'Localizacion', 'id_localizacion'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id_usu_est_pla' => Yii::t('app', 'Id Usu Est Pla'),
			'id_usuario' => null,
			'id_establecimiento' => null,
			'id_tipo_planilla' => null,
			'id_localizacion' => null,
			'idEstablecimiento' => null,
			'idUsuario' => null,
			'idTipoPlanilla' => null,
			'idLocalizacion' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_usu_est_pla', $this->id_usu_est_pla);
		$criteria->compare('id_usuario', $this->id_usuario);
		$criteria->compare('id_establecimiento', $this->id_establecimiento);
		$criteria->compare('id_tipo_planilla', $this->id_tipo_planilla);
		$criteria->compare('id_localizacion', $this->id_localizacion);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}