<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('codsis_usr')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codsis_usr), array('view', 'id'=>$data->codsis_usr)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ci_usr')); ?>:</b>
	<?php echo CHtml::encode($data->ci_usr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_usr')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_usr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido_pat_usr')); ?>:</b>
	<?php echo CHtml::encode($data->apellido_pat_usr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido_mat_usr')); ?>:</b>
	<?php echo CHtml::encode($data->apellido_mat_usr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion_usr')); ?>:</b>
	<?php echo CHtml::encode($data->direccion_usr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_usr')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_usr); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('correo_usr')); ?>:</b>
	<?php echo CHtml::encode($data->correo_usr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('login_usr')); ?>:</b>
	<?php echo CHtml::encode($data->login_usr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password_usr')); ?>:</b>
	<?php echo CHtml::encode($data->password_usr); ?>
	<br />

	*/ ?>

</div>