<?php
/* @var $this PdfController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pdfs',
);

$this->menu=array(
	array('label'=>'Create Pdf', 'url'=>array('create')),
	array('label'=>'Manage Pdf', 'url'=>array('admin')),
);
?>

<h1>Pdfs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
