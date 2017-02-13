<?php

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="57x57" href="https://ol-industrymonitor-static.s3.amazonaws.com/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://ol-industrymonitor-static.s3.amazonaws.com/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://ol-industrymonitor-static.s3.amazonaws.com/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://ol-industrymonitor-static.s3.amazonaws.com/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://ol-industrymonitor-static.s3.amazonaws.com/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://ol-industrymonitor-static.s3.amazonaws.com/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://ol-industrymonitor-static.s3.amazonaws.com/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://ol-industrymonitor-static.s3.amazonaws.com/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://ol-industrymonitor-static.s3.amazonaws.com/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="https://ol-industrymonitor-static.s3.amazonaws.com/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://ol-industrymonitor-static.s3.amazonaws.com/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://ol-industrymonitor-static.s3.amazonaws.com/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://ol-industrymonitor-static.s3.amazonaws.com/favicon/favicon-16x16.png">
    <link rel="manifest" href="https://ol-industrymonitor-static.s3.amazonaws.com/favicon/manifest.json">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="">

<?php $this->beginBody() ?>

<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
