<?php
/**
 * @link http://www.euqol.com/
 * @copyright Copyright (c) 2015 Su Anli
 * @license http://www.euqol.com/license/
 */

namespace anli\metronic\assets;

use yii\web\AssetBundle;

/**
 * This is the modal asset bundle.
 * @author Su Anli <anli@euqol.com>
 * @since 2.0.0
 */
class ModalAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/anli/yii2-metronic/';

    /**
     * @inheritdoc
     */
    public $js = [
        'js/show-modal-button.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
