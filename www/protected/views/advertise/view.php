<?php
/* @var $this AdvertiseController */
/* @var $model Advertise */

$this->breadcrumbs=array(
	'Advertises'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Advertise', 'url'=>array('index')),
	array('label'=>'Create Advertise', 'url'=>array('create')),
	array('label'=>'Update Advertise', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Advertise', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Advertise', 'url'=>array('admin')),
);
?>

<h1>View Advertise #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'description',
		'category_id',
		'created',
		'is_accepted',
		'count_views',
		'delta',
	),
)); ?>
