<?php
/* @var $this DocenteController */
/* @var $model Docente */

$this->breadcrumbs=array(
	'Docentes'=>array('index'),
	$model->id_docente=>array('view','id'=>$model->id_docente),
	'Update',
);

$this->menu=array(
	array('label'=>'List Docente', 'url'=>array('index')),
	array('label'=>'Create Docente', 'url'=>array('create')),
	array('label'=>'View Docente', 'url'=>array('view', 'id'=>$model->id_docente)),
	array('label'=>'Manage Docente', 'url'=>array('admin')),
);
?>

<h1>Update Docente <?php echo $model->id_docente; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>