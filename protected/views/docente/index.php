<?php
/* @var $this DocenteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Docentes',
);

$this->menu=array(
	array('label'=>'Create Docente', 'url'=>array('create')),
	array('label'=>'Manage Docente', 'url'=>array('admin')),
);
?>

<h1>Docentes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
