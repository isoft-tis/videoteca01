<?php
/* @var $this DocenteController */
/* @var $model Docente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'docente-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_codsis_usr'); ?>
		<?php echo $form->textField($model,'usuario_codsis_usr',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'usuario_codsis_usr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'carrera_doc'); ?>
		<?php echo $form->textField($model,'carrera_doc',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'carrera_doc'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->