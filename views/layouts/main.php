<?php

use anli\metronic\assets\InitAsset;
use anli\metronic\assets\MainAsset;
use anli\helper\assets\ModalAsset;
use anli\helper\assets\Select2Asset;
use anli\helper\assets\TooltipAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;
use kartik\alert\AlertBlock;

/* @var $this \yii\web\View */
/* @var $content string */

MainAsset::register($this);
ModalAsset::register($this);
Select2Asset::register($this);
TooltipAsset::register($this);
InitAsset::register($this);

$headerPath = Yii::$app->getModule('metronic')->headerPath;
$sidebarPath = Yii::$app->getModule('metronic')->sidebarPath;
$footerPath = Yii::$app->getModule('metronic')->footerPath;
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
<?= $this->render($headerPath) ?>
<!-- END HEADER -->

<div class="clearfix"></div>
<div class="">
<div class="page-container">

    <!-- BEGIN SIDEBAR -->
	<?= $this->render($sidebarPath) ?>
	<!-- END SIDEBAR -->

    <div class="page-content-wrapper">
        <div class="page-content">

            <!-- BEGIN MODAL -->
            <?php Modal::begin(['id' => 'modal', 'options' => ['tabindex' => 'false', 'data-backdrop' => 'static', 'data-keyboard' => 'false']]);

                echo Html::beginTag('div', ['id' => 'modalContent']);
                    echo Html::beginTag('div', ['style' => 'text-align: center;']);
                        echo Html::img('@web/images/ajax-loader.gif');
                    echo Html::endTag('div');
                echo Html::endTag('div');

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

                <?php Pjax::begin(['id' => 'message-pjax', 'timeout' => false]); ?>
                <!-- BEGIN Alert Block -->
                <?= AlertBlock::widget([
                        'delay' => 0,
                        'useSessionFlash' => true,
                        'type' => AlertBlock::TYPE_ALERT,
                    ]);
                ?>
                <!-- END Alert Block -->
                <?php Pjax::end(); ?>

                <!-- BEGIN PAGE CONTENT-->
                <?= $content ?>
                <!-- END PAGE CONTENT-->


        </div>
    </div>
</div>
</div>
<!-- BEGIN FOOTER -->
<?= $this->render($footerPath) ?>
<!-- END FOOTER -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
