<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'codsis_usr'); ?>
		<?php echo $form->textField($model,'codsis_usr',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ci_usr'); ?>
		<?php echo $form->textField($model,'ci_usr',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_usr'); ?>
		<?php echo $form->textField($model,'nombre_usr',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido_pat_usr'); ?>
		<?php echo $form->textField($model,'apellido_pat_usr',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellido_mat_usr'); ?>
		<?php echo $form->textField($model,'apellido_mat_usr',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion_usr'); ?>
		<?php echo $form->textField($model,'direccion_usr',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_usr'); ?>
		<?php echo $form->textField($model,'telefono_usr',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'correo_usr'); ?>
		<?php echo $form->textField($model,'correo_usr',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'login_usr'); ?>
		<?php echo $form->textField($model,'login_usr',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->