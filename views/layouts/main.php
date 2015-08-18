<?php

use anli\metronic\assets\MainAsset;
use anli\helper\assets\ModalAsset;
use anli\helper\assets\PjaxAsset;
use anli\helper\assets\Select2Asset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;

/* @var $this \yii\web\View */
/* @var $content string */

MainAsset::register($this);
ModalAsset::register($this);
PjaxAsset::register($this);
Select2Asset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="page-sidebar-closed-hide-logo page-container-bg-solid page-sidebar-closed-hide-logo page-boxed page-header-fixed page-footer-fixed">

<?php $this->beginBody() ?>

<!-- BEGIN HEADER -->
<?= $this->render('_header') ?>
<!-- END HEADER -->

<div class="clearfix"></div>
<div class="">
<div class="page-container">

    <!-- BEGIN SIDEBAR -->
	<?= $this->render('_sidebar') ?>
	<!-- END SIDEBAR -->

    <div class="page-content-wrapper">
        <div class="page-content">

            <!-- BEGIN MODAL -->
            <?php Modal::begin(['id' => 'modal', 'options' => ['tabindex' => false]]);
                echo "<div id='modalContent'><div style=\"text-align:center\">" . Html::img('@web/images/ajax-loader.gif') . "</div></div>";
            Modal::end();?>
            <!-- END MODAL -->

            <!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			<?= Html::encode($this->title) ?> <small></small>
			</h3>
			<div class="page-bar">
				<?= Breadcrumbs::widget([
					'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
					'options' => ['class' => 'page-breadcrumb '],
					'itemTemplate' => "<li>{link}<i class=\"fa fa-angle-right\"></i></li>\n",
				]) ?>
			</div>
			<!-- END PAGE HEADER-->

            <!-- BEGIN PAGE CONTENT-->
            <?= $content ?>
            <!-- END PAGE CONTENT-->
        </div>
    </div>
</div>
</div>
<!-- BEGIN FOOTER -->
<?= $this->render('_footer') ?>
<!-- END FOOTER -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
