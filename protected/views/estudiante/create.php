<?php
/* @var $this EstudianteController */
/* @var $model Estudiante */

$this->breadcrumbs=array(
	'Estudiantes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Estudiantes', 'url'=>array('index')),
	array('label'=>'Gestionar Estudiantes', 'url'=>array('admin')),
);
?>

<h1>Create Estudiante</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>