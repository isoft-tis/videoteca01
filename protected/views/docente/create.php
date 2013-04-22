<?php
/* @var $this DocenteController */
/* @var $model Docente */

$this->breadcrumbs=array(
	'Docentes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Docente', 'url'=>array('index')),
	array('label'=>'Manage Docente', 'url'=>array('admin')),
);
?>

<h1>Create Docente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>