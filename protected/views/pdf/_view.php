<?php
/* @var $this PdfController */
/* @var $data Pdf */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pdf')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pdf), array('view', 'id'=>$data->id_pdf)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estudiante_id_est')); ?>:</b>
	<?php echo CHtml::encode($data->estudiante_id_est); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area_pdf')); ?>:</b>
	<?php echo CHtml::encode($data->area_pdf); ?>
	<br />


</div>