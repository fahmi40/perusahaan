<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Divisi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="divisi-form">
    <div class="x_panel">
        <div class="x_title">
			<h2>Divisi</h2>
			<div class="clearfix"></div>
		</div>
        <div class="x_content">
            <br>
            <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'nama_divisi')->textInput(['maxlength' => true]) ?>

                <div class="ln_solid">
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
