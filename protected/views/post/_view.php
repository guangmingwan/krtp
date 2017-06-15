<?php
/* @var $this PostController */
/* @var $data Post */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supplier_sn')); ?>:</b>
	<?php echo CHtml::encode($data->supplier_sn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supplier_name')); ?>:</b>
	<?php echo CHtml::encode($data->supplier_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('linkman')); ?>:</b>
	<?php echo CHtml::encode($data->linkman); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('linktel')); ?>:</b>
	<?php echo CHtml::encode($data->linktel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('color')); ?>:</b>
	<?php echo CHtml::encode($data->color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('class')); ?>:</b>
	<?php echo CHtml::encode($data->class); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('library')); ?>:</b>
	<?php echo CHtml::encode($data->library); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('percent')); ?>:</b>
	<?php echo CHtml::encode($data->percent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zhen_number')); ?>:</b>
	<?php echo CHtml::encode($data->zhen_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inch_number')); ?>:</b>
	<?php echo CHtml::encode($data->inch_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_zhen_number')); ?>:</b>
	<?php echo CHtml::encode($data->total_zhen_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('width')); ?>:</b>
	<?php echo CHtml::encode($data->width); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_weight')); ?>:</b>
	<?php echo CHtml::encode($data->goods_weight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pi_number')); ?>:</b>
	<?php echo CHtml::encode($data->pi_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pi_weight')); ?>:</b>
	<?php echo CHtml::encode($data->pi_weight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('weight')); ?>:</b>
	<?php echo CHtml::encode($data->weight); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('face_pic')); ?>:</b>
	<?php echo CHtml::encode($data->face_pic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('back_pic')); ?>:</b>
	<?php echo CHtml::encode($data->back_pic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deleted_at')); ?>:</b>
	<?php echo CHtml::encode($data->deleted_at); ?>
	<br />

	*/ ?>

</div>