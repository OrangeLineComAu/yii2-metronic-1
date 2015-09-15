<?php
/**
 * @link http://www.euqol.com/
 * @copyright Copyright (c) 2015 Su Anli
 * @license http://www.euqol.com/license/
 */

namespace anli\metronic\assets;

use yii\web\AssetBundle;

/**
 * This is the profile asset bundle.
 * @author Su Anli <anli@euqol.com>
 * @since 1.6.0
 */
class ProfileAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $basePath = '@webroot/metronic/theme/';

    /**
     * @inheritdoc
     */
    public $baseUrl = '@web/metronic/theme/';

    /**
     * @inheritdoc
     */
    public $css = [
        'assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css',
        'assets/admin/pages/css/profile.css',
        'assets/admin/pages/css/tasks.css',
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'assets/admin/pages/scripts/profile.js',
        '../js/profile.js',                 // user created
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'anli\metronic\assets\MainAsset',
    ];}
