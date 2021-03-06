<?php

/**
 * This is the model base class for the table "educacion_no_formal".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "EducacionNoFormal".
 *
 * Columns in table "educacion_no_formal" available as properties of the model,
 * followed by relations of table "educacion_no_formal" available as properties of the model.
 *
 * @property integer $id_educacion_no_formal
 * @property integer $id_establecimiento
 * @property integer $tot_alu_act
 * @property integer $tot_alu_act_obl
 * @property integer $tot_alu_act_opt
 * @property integer $nombre_taller_oferta_grupos
 * @property integer $id_caracter_actividad
 * @property integer $id_turno
 * @property integer $tot_alu
 * @property integer $tot_var
 * @property integer $tot_muj
 * @property string $mes
 * @property integer $anio
 *
 * @property CaracterActividad $idCaracterActividad
 * @property Turno $idTurno
 * @property Establecimiento $idEstablecimiento
 */
abstract class BaseEducacionNoFormal extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'educacion_no_formal';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'EducacionNoFormal|EducacionNoFormals', $n);
	}

	public static function representingColumn() {
		return 'mes';
	}

	public function rules() {
		return array(
			array('id_educacion_no_formal', 'required'),
			array('id_educacion_no_formal, id_establecimiento, tot_alu_act, tot_alu_act_obl, tot_alu_act_opt, nombre_taller_oferta_grupos, id_caracter_actividad, id_turno, tot_alu, tot_var, tot_muj, anio', 'numerical', 'integerOnly'=>true),
			array('mes', 'length', 'max'=>12),
			array('id_establecimiento, tot_alu_act, tot_alu_act_obl, tot_alu_act_opt, nombre_taller_oferta_grupos, id_caracter_actividad, id_turno, tot_alu, tot_var, tot_muj, mes, anio', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id_educacion_no_formal, id_establecimiento, tot_alu_act, tot_alu_act_obl, tot_alu_act_opt, nombre_taller_oferta_grupos, id_caracter_actividad, id_turno, tot_alu, tot_var, tot_muj, mes, anio', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
			'idCaracterActividad' => array(self::BELONGS_TO, 'CaracterActividad', 'id_caracter_actividad'),
			'idTurno' => array(self::BELONGS_TO, 'Turno', 'id_turno'),
			'idEstablecimiento' => array(self::BELONGS_TO, 'Establecimiento', 'id_establecimiento'),
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id_educacion_no_formal' => Yii::t('app', 'Id Educacion No Formal'),
			'id_establecimiento' => null,
			'tot_alu_act' => Yii::t('app', 'Tot Alu Act'),
			'tot_alu_act_obl' => Yii::t('app', 'Tot Alu Act Obl'),
			'tot_alu_act_opt' => Yii::t('app', 'Tot Alu Act Opt'),
			'nombre_taller_oferta_grupos' => Yii::t('app', 'Nombre Taller Oferta Grupos'),
			'id_caracter_actividad' => null,
			'id_turno' => null,
			'tot_alu' => Yii::t('app', 'Tot Alu'),
			'tot_var' => Yii::t('app', 'Tot Var'),
			'tot_muj' => Yii::t('app', 'Tot Muj'),
			'mes' => Yii::t('app', 'Mes'),
			'anio' => Yii::t('app', 'Anio'),
			'idCaracterActividad' => null,
			'idTurno' => null,
			'idEstablecimiento' => null,
			'' => null,	
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id_educacion_no_formal', $this->id_educacion_no_formal);
		$criteria->compare('id_establecimiento', $this->id_establecimiento);
		$criteria->compare('tot_alu_act', $this->tot_alu_act);
		$criteria->compare('tot_alu_act_obl', $this->tot_alu_act_obl);
		$criteria->compare('tot_alu_act_opt', $this->tot_alu_act_opt);
		$criteria->compare('nombre_taller_oferta_grupos', $this->nombre_taller_oferta_grupos);
		$criteria->compare('id_caracter_actividad', $this->id_caracter_actividad);
		$criteria->compare('id_turno', $this->id_turno);
		$criteria->compare('tot_alu', $this->tot_alu);
		$criteria->compare('tot_var', $this->tot_var);
		$criteria->compare('tot_muj', $this->tot_muj);
		$criteria->compare('mes', $this->mes, true);
		$criteria->compare('anio', $this->anio);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}