<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'supplier_sn'); ?>
		<?php echo $form->textField($model,'supplier_sn'); ?>
		<?php echo $form->error($model,'supplier_sn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'supplier_name'); ?>
		<?php echo $form->textField($model,'supplier_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'supplier_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'linkman'); ?>
		<?php echo $form->textField($model,'linkman',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'linkman'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'linktel'); ?>
		<?php echo $form->textField($model,'linktel',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'linktel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'color'); ?>
		<?php echo $form->textField($model,'color',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'color'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'class'); ?>
		<?php echo $form->textField($model,'class'); ?>
		<?php echo $form->error($model,'class'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'library'); ?>
		<?php echo $form->textField($model,'library',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'library'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'percent'); ?>
		<?php echo $form->textField($model,'percent'); ?>
		<?php echo $form->error($model,'percent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zhen_number'); ?>
		<?php echo $form->textField($model,'zhen_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'zhen_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inch_number'); ?>
		<?php echo $form->textField($model,'inch_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'inch_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_zhen_number'); ?>
		<?php echo $form->textField($model,'total_zhen_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'total_zhen_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'width'); ?>
		<?php echo $form->textField($model,'width'); ?>
		<?php echo $form->error($model,'width'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'goods_weight'); ?>
		<?php echo $form->textField($model,'goods_weight'); ?>
		<?php echo $form->error($model,'goods_weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pi_number'); ?>
		<?php echo $form->textField($model,'pi_number'); ?>
		<?php echo $form->error($model,'pi_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pi_weight'); ?>
		<?php echo $form->textField($model,'pi_weight'); ?>
		<?php echo $form->error($model,'pi_weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'weight'); ?>
		<?php echo $form->textField($model,'weight'); ?>
		<?php echo $form->error($model,'weight'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'face_pic'); ?>
		<?php echo $form->textField($model,'face_pic',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'face_pic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'back_pic'); ?>
		<?php echo $form->textField($model,'back_pic',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'back_pic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notes'); ?>
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'notes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
		<?php echo $form->error($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
		<?php echo $form->error($model,'updated_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deleted_at'); ?>
		<?php echo $form->textField($model,'deleted_at'); ?>
		<?php echo $form->error($model,'deleted_at'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->