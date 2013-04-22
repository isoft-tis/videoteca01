<?php
/* @var $this AdministradorController */
/* @var $data Administrador */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_administrador')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_administrador), array('view', 'id'=>$data->id_administrador)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_codsis_usr')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_codsis_usr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('turno_adm')); ?>:</b>
	<?php echo CHtml::encode($data->turno_adm); ?>
	<br />


</div>