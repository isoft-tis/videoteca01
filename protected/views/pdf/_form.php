<?php
/* @var $this PdfController */
/* @var $model Pdf */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pdf-form',
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
		<?php echo $form->labelEx($model,'area_pdf'); ?>
		<?php echo $form->textField($model,'area_pdf',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'area_pdf'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->