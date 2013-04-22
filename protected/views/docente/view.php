<?php
/* @var $this DocenteController */
/* @var $model Docente */

$this->breadcrumbs=array(
	'Docentes'=>array('index'),
	$model->id_docente,
);

$this->menu=array(
	array('label'=>'List Docente', 'url'=>array('index')),
	array('label'=>'Create Docente', 'url'=>array('create')),
	array('label'=>'Update Docente', 'url'=>array('update', 'id'=>$model->id_docente)),
	array('label'=>'Delete Docente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_docente),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Docente', 'url'=>array('admin')),
);
?>

<h1>View Docente #<?php echo $model->id_docente; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_docente',
		'usuario_codsis_usr',
		'carrera_doc',
	),
)); ?>
