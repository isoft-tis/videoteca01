<?php
/* @var $this EstudianteController */
/* @var $model Estudiante */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	$model->id_est=>array('view','id'=>$model->id_est),
	'Update',
);

$this->menu=array(
	array('label'=>'List Estudiante', 'url'=>array('index')),
	array('label'=>'Create Estudiante', 'url'=>array('create')),
	array('label'=>'View Estudiante', 'url'=>array('view', 'id'=>$model->id_est)),
	array('label'=>'Manage Estudiante', 'url'=>array('admin')),
);
?>

<h1>Update Estudiante <?php echo $model->id_est; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>