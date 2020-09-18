<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<h1>Text Action</h1>
<?php $form = ActiveForm::begin()?>
<?= $form->field($model,'name')->label('Имя')->passwordInput()?>
<?= $form->field($model,'email')?>
<?= $form->field($model,'text')->label('Текст сообщения')->textarea()?>
<?php ActiveForm::end()?>


