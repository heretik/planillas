<?php

/**
 * This is the model base class for the table "seccion".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Seccion".
 *
 * Columns in table "seccion" available as properties of the model,
 * followed by relations of table "seccion" available as properties of the model.
 *
 * @property integer $id_seccion
 * @property string $descripcion
 * @property string $codigo
 *
 * @property DetallePlanilla[] $detallePlanillas
 */
abstract class BaseSeccion extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'seccion';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Seccion|Seccions', $n);
	}

	public static function representingColumn() {
		return 'descripcion';
	}

	public function rules() {
		return array(
			array('codigo', 'length', 'max'=>2),
			array('descripcion', 'safe'),
			array('descripcion, codigo', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id_seccion, descripcion, codigo', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'detallePlanillas' => array(self::HAS_MANY, 'DetallePlanilla', 'id_seccion'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id_seccion' => Yii::t('app', 'Id Seccion'),
			'descripcion' => Yii::t('app', 'Descripcion'),
			'codigo' => Yii::t('app', 'Codigo'),
			'detallePlanillas' => null,
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_seccion', $this->id_seccion);
		$criteria->compare('descripcion', $this->descripcion, true);
		$criteria->compare('codigo', $this->codigo, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}