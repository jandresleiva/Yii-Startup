<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Mongo Test';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        If you have business inquiries or other questions, please fill out the following form to contact us.
        Thank you.
    </p>
    <?php
        var_dump($test);
    ?>
</div>
