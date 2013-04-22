<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'codsis_usr'); ?>
		<?php echo $form->textField($model,'codsis_usr',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'codsis_usr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ci_usr'); ?>
		<?php echo $form->textField($model,'ci_usr',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ci_usr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_usr'); ?>
		<?php echo $form->textField($model,'nombre_usr',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre_usr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido_pat_usr'); ?>
		<?php echo $form->textField($model,'apellido_pat_usr',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'apellido_pat_usr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido_mat_usr'); ?>
		<?php echo $form->textField($model,'apellido_mat_usr',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'apellido_mat_usr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion_usr'); ?>
		<?php echo $form->textField($model,'direccion_usr',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'direccion_usr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_usr'); ?>
		<?php echo $form->textField($model,'telefono_usr',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'telefono_usr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'correo_usr'); ?>
		<?php echo $form->textField($model,'correo_usr',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'correo_usr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'login_usr'); ?>
		<?php echo $form->textField($model,'login_usr',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'login_usr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password_usr'); ?>
		<?php echo $form->textField($model,'password_usr',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'password_usr'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->