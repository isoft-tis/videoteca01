<?php
/* @var $this DocenteController */
/* @var $data Docente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_docente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_docente), array('view', 'id'=>$data->id_docente)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_codsis_usr')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_codsis_usr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('carrera_doc')); ?>:</b>
	<?php echo CHtml::encode($data->carrera_doc); ?>
	<br />


</div>