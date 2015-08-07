<?php
/* @var $this CategoryController */
/* @var $data Category */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_id')); ?>:</b>
	<?php echo CHtml::encode($data->parent_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_accepted')); ?>:</b>
	<?php echo CHtml::encode($data->is_accepted); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity_products')); ?>:</b>
	<?php echo CHtml::encode($data->quantity_products); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('delta')); ?>:</b>
	<?php echo CHtml::encode($data->delta); ?>
	<br />


</div>