<?php
/**
 * @link http://www.euqol.com/
 * @copyright Copyright (c) 2015 Su Anli
 * @license http://www.euqol.com/license/
 */

namespace anli\metronic\widgets;

use anli\metronic\assets\InitAsset;
use anli\metronic\assets\MainAsset;
use anli\metronic\assets\TooltipAsset;
use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap\Widget;
use yii\bootstrap\BootstrapPluginAsset;

/**
 * This is the body widget class.
 * @author Su Anli <anli@euqol.com>
 * @since 2.0.0
 */
class Body extends Widget
{
    /**
     * Initializes the widget.
     */
    public function init()
    {
        parent::init();

        MainAsset::register($this->getView());
        InitAsset::register($this->getView());
        TooltipAsset::register($this->getView());

        echo Html::beginTag('body', ['class' => 'page-sidebar-closed-hide-logo page-container-bg-solid page-sidebar-closed-hide-logo page-boxed page-header-fixed page-footer-fixed']);
        $this->getView()->beginBody();
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        $this->getView()->endBody();
        echo Html::endTag('body');
    }

    /**
     * @return mixed
     */
    public function header($params = [])
    {
        return new Header($params);
    }

    /**
     * @return mixed
     */
    public function sidebar($params = [])
    {
        return new Sidebar($params);
    }

    /**
     * @return mixed
     */
    public function footer($params = [])
    {
        return new Footer($params);
    }
}
