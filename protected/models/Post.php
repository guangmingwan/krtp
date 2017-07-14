<?php

/**
 * This is the model class for table "{{post}}".
 *
 * The followings are the available columns in table '{{post}}':
 * @property string $id
 * @property string $openid
 * @property string $company
 * @property string $username
 * @property string $tel
 * @property string $color
 * @property string $ingredients
 * @property string $method
 * @property string $gan_number
 * @property string $manufacture_date
 * @property string $band
 * @property string $jian_number
 * @property integer $class
 * @property string $name
 * @property string $library
 * @property string $percent
 * @property string $zhi_number
 * @property string $zhen_number
 * @property string $inch_number
 * @property string $total_zhen_number
 * @property integer $width
 * @property integer $goods_weight
 * @property integer $pi_number
 * @property integer $pi_weight
 * @property integer $weight
 * @property integer $price
 * @property string $face_pic
 * @property string $back_pic
 * @property string $notes
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Post extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{post}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('class, width, goods_weight, pi_number, pi_weight, weight, price', 'numerical', 'integerOnly'=>true),
			array('openid, company, color, ingredients, method, gan_number, manufacture_date, band, jian_number, name, library, zhi_number, zhen_number, inch_number, total_zhen_number, face_pic, back_pic', 'length', 'max'=>255),
			array('username, percent', 'length', 'max'=>50),
			array('tel', 'length', 'max'=>20),
			array('notes, created_at, updated_at, deleted_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, openid, company, username, tel, color, ingredients, method, gan_number, manufacture_date, band, jian_number, class, name, library, percent, zhi_number, zhen_number, inch_number, total_zhen_number, width, goods_weight, pi_number, pi_weight, weight, price, face_pic, back_pic, notes, created_at, updated_at, deleted_at', 'safe', 'on'=>'search'),
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
			'id' => '编号',
			'openid' => '供应商编号',
			'company' => '供应商名称',
			'username' => '联系人姓名',
			'tel' => '联系人电话',
			'color' => '颜色',
			'ingredients' => '成份',
			'method' => '纺法',
			'gan_number' => '批号／缸号',
			'manufacture_date' => '生产日期',
			'band' => '牌子／产地',
			'jian_number' => '库存件数',
			'class' => '布类分类',
			'name' => '布类名称',
			'library' => '用纱资料',
			'percent' => '比例(%)',
			'zhi_number' => '支数',
			'zhen_number' => '针数',
			'inch_number' => '寸数',
			'total_zhen_number' => '总针数',
			'width' => '成品幅宽(CM)',
			'goods_weight' => '成品克重',
			'pi_number' => '匹数',
			'pi_weight' => '匹重',
			'weight' => '重量(KG)',
			'price' => '单价(不含税)',
			'face_pic' => '布面图片',
			'back_pic' => '布底图片',
			'notes' => '备注',
			'created_at' => '创建时间',
			'updated_at' => '修改时间',
			'deleted_at' => '删除时间',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('openid',$this->openid,true);
		$criteria->compare('company',$this->company,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('color',$this->color,true);
		$criteria->compare('ingredients',$this->ingredients,true);
		$criteria->compare('method',$this->method,true);
		$criteria->compare('gan_number',$this->gan_number,true);
		$criteria->compare('manufacture_date',$this->manufacture_date,true);
		$criteria->compare('band',$this->band,true);
		$criteria->compare('jian_number',$this->jian_number,true);
		$criteria->compare('class',$this->class);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('library',$this->library,true);
		$criteria->compare('percent',$this->percent,true);
		$criteria->compare('zhi_number',$this->zhi_number,true);
		$criteria->compare('zhen_number',$this->zhen_number,true);
		$criteria->compare('inch_number',$this->inch_number,true);
		$criteria->compare('total_zhen_number',$this->total_zhen_number,true);
		$criteria->compare('width',$this->width);
		$criteria->compare('goods_weight',$this->goods_weight);
		$criteria->compare('pi_number',$this->pi_number);
		$criteria->compare('pi_weight',$this->pi_weight);
		$criteria->compare('weight',$this->weight);
		$criteria->compare('price',$this->price);
		$criteria->compare('face_pic',$this->face_pic,true);
		$criteria->compare('back_pic',$this->back_pic,true);
		$criteria->compare('notes',$this->notes,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('updated_at',$this->updated_at,true);
		$criteria->compare('deleted_at',$this->deleted_at,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Post the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
