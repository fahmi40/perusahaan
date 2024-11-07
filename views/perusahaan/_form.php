<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Perusahaan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="perusahaan-form">
    <div class="x_panel">
        <div class="x_title">
			<h2>Perusahaan</h2>
			<div class="clearfix"></div>
		</div>
        <div class="x_content">
            <br>
            <?php $form = ActiveForm::begin(); ?>
                <div class="row">
                    <div class="col-md-6">
                        <?= $form->field($model, 'nama_perusahaan')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <?= $form->field($model, 'email_perusahaan')->textInput(['maxlength' => true]) ?>
                    </div>
                    <div class="col-md-6">
                        <?= $form->field($model, 'website_perusahaan')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>
                
                <div class="ln_solid">
                </div>
                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>  
