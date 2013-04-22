<?php
/* @var $this PdfController */
/* @var $model Pdf */

$this->breadcrumbs=array(
	'Pdfs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pdf', 'url'=>array('index')),
	array('label'=>'Manage Pdf', 'url'=>array('admin')),
);
?>

<h1>Create Pdf</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>