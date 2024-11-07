<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Divisi;
use yii\jui\DatePicker;

/** @var yii\web\View $this */
/** @var app\models\Karyawan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="karyawan-form">
    <div class="x_panel">
		<div class="x_title">
			<h2>Identitas Karyawan</h2>
			<div class="clearfix"></div>
		</div>
		<div class="x_content">
		    <br>
			<?php $form = ActiveForm::begin(); ?>
                <div class="row">
                    <div class="col-md-6">
                        <?= $form->field($model, 'nama_karyawan')->textInput(['maxlength' => true]) ?>
                    </div>

                    <div class="col-md-6">
                        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <?= $form->field($model, 'divisi_id')->dropDownList(
                            ArrayHelper::map(divisi::find()->all(),'id','nama_divisi'),
                            ['prompt'=>'Pilih Divisi']
                        ) ?>
                    </div>

                    <div class="col-md-6">
                        <?= $form->field($model, 'tgl_bergabung')->widget(DatePicker::className(), [
                            'dateFormat' => 'yyyy-MM-dd',
                            'options' => ['class' => 'form-control'],
                        ]); ?>
                    </div>        
                </div>
                
                <div class="row">
                    <div class="col-md-4">
                        <?= $form->field($model, 'telepon')->textInput(['maxlength' => true]) ?>
                    </div>

                    <div class="col-md-4">
                        <?= $form->field($model, 'nik')->textInput(['maxlength' => true]) ?>
                    </div>

                    <div class="col-md-4">
                        <?= $form->field($model, 'jabatan')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <?= $form->field($model, 'alamat')->textArea(['maxlength' => true]) ?>
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
