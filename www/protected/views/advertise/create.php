<?php
/* @var $this AdvertiseController */
/* @var $model Advertise */

$this->breadcrumbs=array(
	'Advertises'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Advertise', 'url'=>array('index')),
	array('label'=>'Manage Advertise', 'url'=>array('admin')),
);
?>

<h1>Create Advertise</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>