<?php
/* @var $this PdfController */
/* @var $model Pdf */

$this->breadcrumbs=array(
	'Pdfs'=>array('index'),
	$model->id_pdf=>array('view','id'=>$model->id_pdf),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pdf', 'url'=>array('index')),
	array('label'=>'Create Pdf', 'url'=>array('create')),
	array('label'=>'View Pdf', 'url'=>array('view', 'id'=>$model->id_pdf)),
	array('label'=>'Manage Pdf', 'url'=>array('admin')),
);
?>

<h1>Update Pdf <?php echo $model->id_pdf; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>