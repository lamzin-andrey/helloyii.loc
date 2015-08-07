<?php
/* @var $this AdvertiseController */
/* @var $data Advertise */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
	<?php echo CHtml::encode($data->category_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_accepted')); ?>:</b>
	<?php echo CHtml::encode($data->is_accepted); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('count_views')); ?>:</b>
	<?php echo CHtml::encode($data->count_views); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('delta')); ?>:</b>
	<?php echo CHtml::encode($data->delta); ?>
	<br />

	*/ ?>

</div>