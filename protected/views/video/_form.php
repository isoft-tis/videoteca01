<?php
/* @var $this VideoController */
/* @var $model Video */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'video-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'estudiante_id_est'); ?>
		<?php echo $form->textField($model,'estudiante_id_est',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'estudiante_id_est'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'introduccion_vid'); ?>
		<?php echo $form->textField($model,'introduccion_vid',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'introduccion_vid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'duracion_vid'); ?>
		<?php echo $form->textField($model,'duracion_vid'); ?>
		<?php echo $form->error($model,'duracion_vid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idioma_vid'); ?>
		<?php echo $form->textField($model,'idioma_vid',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'idioma_vid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tamano_vid'); ?>
		<?php echo $form->textField($model,'tamano_vid',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tamano_vid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'formato_vid'); ?>
		<?php echo $form->textField($model,'formato_vid',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'formato_vid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calidad_vid'); ?>
		<?php echo $form->textField($model,'calidad_vid',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'calidad_vid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'enlace_vid'); ?>
		<?php echo $form->textField($model,'enlace_vid',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'enlace_vid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_pub_vid'); ?>
		<?php echo $form->textField($model,'fecha_pub_vid'); ?>
		<?php echo $form->error($model,'fecha_pub_vid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->