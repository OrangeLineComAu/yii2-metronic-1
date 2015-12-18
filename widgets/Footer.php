<?php
/**
 * @link http://www.euqol.com/
 * @copyright Copyright (c) 2015 Su Anli
 * @license http://www.euqol.com/license/
 */

namespace anli\metronic\widgets;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\Menu;
use yii\bootstrap\Widget;
use yii\bootstrap\BootstrapPluginAsset;

/**
 * This is the Footer widget class.
 * @author Su Anli <anli@euqol.com>
 * @since 2.0.0
 */
class Footer extends Widget
{
    /**
     * @var string
     */
    public $html = '';
    /**
     * Initializes the widget.
     */
    public function init()
    {
        parent::init();
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        echo Html::beginTag('div', ['class' => 'page-footer']);
        echo Html::beginTag('div', ['class' => 'page-footer-inner']);
        echo $this->html;
        echo Html::tag('div', Html::tag('i', '', ['class' => 'icon-arrow-up']), ['class' => 'scroll-to-top']);

        echo Html::endTag('div');   // page-footer-inner
        echo Html::endTag('div');   // page-footer
    }

}
