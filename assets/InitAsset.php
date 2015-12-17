<?php
/**
 * @link http://www.euqol.com/
 * @copyright Copyright (c) 2015 Su Anli
 * @license http://www.euqol.com/license/
 */

namespace anli\metronic\assets;

use yii\web\AssetBundle;

/**
 * This is the init asset bundle.
 * @author Su Anli <anli@euqol.com>
 * @since 2.0.0
 */
class InitAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@vendor/anli/yii2-metronic/';

    /**
     * @inheritdoc
     */
    public $js = [
        'js/init.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
