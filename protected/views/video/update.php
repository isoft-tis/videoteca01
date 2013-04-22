<?php
/* @var $this VideoController */
/* @var $model Video */

$this->breadcrumbs=array(
	'Videos'=>array('index'),
	$model->id_video=>array('view','id'=>$model->id_video),
	'Update',
);

$this->menu=array(
	array('label'=>'List Video', 'url'=>array('index')),
	array('label'=>'Create Video', 'url'=>array('create')),
	array('label'=>'View Video', 'url'=>array('view', 'id'=>$model->id_video)),
	array('label'=>'Manage Video', 'url'=>array('admin')),
);
?>

<h1>Update Video <?php echo $model->id_video; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>