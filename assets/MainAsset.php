<?php
/**
 * @link http://www.euqol.com/
 * @copyright Copyright (c) 2015 Su Anli
 * @license http://www.euqol.com/license/
 */

namespace anli\metronic\assets;

use yii\web\AssetBundle;

/**
 * This is the main asset bundle.
 * @author Su Anli <anli@euqol.com>
 * @since 1.0.0
 */
class MainAsset extends AssetBundle
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
        //'css/site.css',
        'https://fonts.googleapis.com/css?family=Open+Sans:400,200,600,700&subset=all',
        'assets/global/plugins/font-awesome/css/font-awesome.min.css',
        'assets/global/plugins/simple-line-icons/simple-line-icons.min.css',
        'assets/global/plugins/bootstrap/css/bootstrap.min.css',
        'assets/global/plugins/uniform/css/uniform.default.css',
        'assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
        /* BEGIN THEME STYLES */

        //'assets/global/css/components.css',
        'assets/global/css/components-rounded.css',
        'assets/global/css/plugins.css',
        'assets/admin/layout2/css/layout.css',

        //'assets/admin/layout2/css/themes/default.css',
        'assets/admin/layout2/css/themes/blue.css',
        'assets/admin/layout2/css/custom.css',
        /* END THEME STYLES */
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',	//
        'assets/global/plugins/jquery.sparkline.min.js',
        'assets/global/scripts/metronic.js',
        'assets/admin/layout2/scripts/layout.js',
        'assets/admin/layout2/scripts/demo.js',	//
        'assets/admin/pages/scripts/index.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
