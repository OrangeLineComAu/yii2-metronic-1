<?php
/**
 * @link http://www.euqol.com/
 * @copyright Copyright (c) 2015 Su Anli
 * @license http://www.euqol.com/license/
 */

namespace anli\metronic\assets;

use yii\web\AssetBundle;

/**
 * This is the bootstrap tooltip asset bundle.
 * @author Su Anli <anli@euqol.com>
 * @since 2.0.0
 */
class TooltipAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/anli/yii2-metronic/';

    /**
     * @inheritdoc
     */
    public $js = [
        'js/tooltip-init.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
