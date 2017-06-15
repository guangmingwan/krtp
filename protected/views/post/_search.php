<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'supplier_sn'); ?>
		<?php echo $form->textField($model,'supplier_sn'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'supplier_name'); ?>
		<?php echo $form->textField($model,'supplier_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'linkman'); ?>
		<?php echo $form->textField($model,'linkman',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'linktel'); ?>
		<?php echo $form->textField($model,'linktel',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'color'); ?>
		<?php echo $form->textField($model,'color',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'class'); ?>
		<?php echo $form->textField($model,'class'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'library'); ?>
		<?php echo $form->textField($model,'library',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'percent'); ?>
		<?php echo $form->textField($model,'percent'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zhen_number'); ?>
		<?php echo $form->textField($model,'zhen_number',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inch_number'); ?>
		<?php echo $form->textField($model,'inch_number',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_zhen_number'); ?>
		<?php echo $form->textField($model,'total_zhen_number',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'width'); ?>
		<?php echo $form->textField($model,'width'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'goods_weight'); ?>
		<?php echo $form->textField($model,'goods_weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pi_number'); ?>
		<?php echo $form->textField($model,'pi_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pi_weight'); ?>
		<?php echo $form->textField($model,'pi_weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'weight'); ?>
		<?php echo $form->textField($model,'weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'face_pic'); ?>
		<?php echo $form->textField($model,'face_pic',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'back_pic'); ?>
		<?php echo $form->textField($model,'back_pic',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'notes'); ?>
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deleted_at'); ?>
		<?php echo $form->textField($model,'deleted_at'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->