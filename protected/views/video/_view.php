<?php
/* @var $this VideoController */
/* @var $data Video */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_video')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_video), array('view', 'id'=>$data->id_video)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estudiante_id_est')); ?>:</b>
	<?php echo CHtml::encode($data->estudiante_id_est); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('introduccion_vid')); ?>:</b>
	<?php echo CHtml::encode($data->introduccion_vid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duracion_vid')); ?>:</b>
	<?php echo CHtml::encode($data->duracion_vid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idioma_vid')); ?>:</b>
	<?php echo CHtml::encode($data->idioma_vid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tamano_vid')); ?>:</b>
	<?php echo CHtml::encode($data->tamano_vid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('formato_vid')); ?>:</b>
	<?php echo CHtml::encode($data->formato_vid); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('calidad_vid')); ?>:</b>
	<?php echo CHtml::encode($data->calidad_vid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enlace_vid')); ?>:</b>
	<?php echo CHtml::encode($data->enlace_vid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_pub_vid')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_pub_vid); ?>
	<br />

	*/ ?>

</div>