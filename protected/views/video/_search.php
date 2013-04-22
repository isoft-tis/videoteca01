<?php
/* @var $this VideoController */
/* @var $model Video */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_video'); ?>
		<?php echo $form->textField($model,'id_video',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estudiante_id_est'); ?>
		<?php echo $form->textField($model,'estudiante_id_est',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'introduccion_vid'); ?>
		<?php echo $form->textField($model,'introduccion_vid',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'duracion_vid'); ?>
		<?php echo $form->textField($model,'duracion_vid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idioma_vid'); ?>
		<?php echo $form->textField($model,'idioma_vid',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tamano_vid'); ?>
		<?php echo $form->textField($model,'tamano_vid',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'formato_vid'); ?>
		<?php echo $form->textField($model,'formato_vid',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'calidad_vid'); ?>
		<?php echo $form->textField($model,'calidad_vid',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'enlace_vid'); ?>
		<?php echo $form->textField($model,'enlace_vid',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_pub_vid'); ?>
		<?php echo $form->textField($model,'fecha_pub_vid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->