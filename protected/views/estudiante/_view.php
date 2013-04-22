<?php
/* @var $this EstudianteController */
/* @var $data Estudiante */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_est')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_est), array('view', 'id'=>$data->id_est)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_codsis_usr')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_codsis_usr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('carrera_est')); ?>:</b>
	<?php echo CHtml::encode($data->carrera_est); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('semestre_est')); ?>:</b>
	<?php echo CHtml::encode($data->semestre_est); ?>
	<br />


</div>