<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */

/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<section class="footer content">

    <div class="site-error" style="margin-top: 200px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <h1><?= Html::encode($name) ?></h1>

                    <div class="alert alert-warning">
                        <?php
                        echo nl2br(Html::encode($message))
                        ?>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
