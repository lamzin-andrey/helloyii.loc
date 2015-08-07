<?php
/* @var $this AdvertiseController */
/* @var $model Advertise */

$this->breadcrumbs=array(
	'Advertises'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Advertise', 'url'=>array('index')),
	array('label'=>'Create Advertise', 'url'=>array('create')),
	array('label'=>'View Advertise', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Advertise', 'url'=>array('admin')),
);
?>

<h1>Update Advertise <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>