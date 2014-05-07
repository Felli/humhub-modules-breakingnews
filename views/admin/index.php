<h1><?php echo Yii::t('BreakingNewsModule.admin', 'Breaking News Configuration'); ?></h1>
<br/>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'breakingnews-edit-form',
    'enableAjaxValidation' => true,
));
?>

<?php echo $form->errorSummary($model); ?>


<div class="form-group">
    <div class="checkbox">
        <label>
            <?php echo $form->checkBox($model, 'active'); ?> <?php echo $model->getAttributeLabel('active'); ?>
        </label>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'title'); ?>
    <?php echo $form->textField($model, 'title', array('class' => 'form-control')); ?>
    <?php echo $form->error($model, 'title'); ?>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'message'); ?>
    <?php echo $form->textArea($model, 'message', array('rows' => 10, 'class' => 'form-control')); ?>
    <?php echo $form->error($model, 'message'); ?>
    <p class="help-block"><?php echo Yii::t('BreakingNewsModule.admin', 'Note: You can use markdown syntax.'); ?></p>
    
</div>

<div class="form-group">
    <div class="checkbox">
        <label>
            <?php echo $form->checkBox($model, 'reset'); ?> <?php echo $model->getAttributeLabel('reset'); ?>
        </label>
    </div>
</div>

<hr>

<?php echo CHtml::submitButton(Yii::t('BreakingNewsModule.admin', 'Save'), array('class' => 'btn btn-primary')); ?>
 <a class="btn btn-default" href="<?php echo $this->createUrl('//admin/module'); ?>"><?php echo Yii::t('AdminModule.base', 'Back to modules'); ?></a>

<?php $this->endWidget(); ?>
