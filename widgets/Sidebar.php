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
 * This is the Sidebar widget class.
 * @author Su Anli <anli@euqol.com>
 * @since 2.0.0
 */
class Sidebar extends Widget
{
    /**
     * @var array
     */
    public $items = [];

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
        echo Html::beginTag('div', ['class' => 'page-sidebar-wrapper']);
        echo Html::beginTag('div', ['class' => 'page-sidebar navbar-collapse collapse']);
        echo Menu::widget([
            'items' => $this->items,
            'encodeLabels' => false,
            'options' => ['class' => 'page-sidebar-menu', 'data-keep-expanded' => "false", 'data-auto-scroll' => "true", 'data-slide-speed' => 200],
            'submenuTemplate' => "\n<ul class=\"sub-menu\">\n{items}\n</ul>\n"
        ]);
        echo Html::endTag('div');   // page-sidebar-wrapper
        echo Html::endTag('div');   // page-sidebar
    }

}
