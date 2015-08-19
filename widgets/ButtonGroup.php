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
use yii\bootstrap\Widget;
use yii\bootstrap\BootstrapPluginAsset;

/**
 * This is the button group widget class.
 *
 * @author Su Anli <anli@euqol.com>
 * @since 1.0.0
 */
class ButtonGroup extends Widget
{
    /**
     * @param array the buttons
     */
    public $buttons = [];

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

        echo Html::beginTag('div', ['class' => 'btn-group']);
            echo Html::beginTag('a', ['class' => 'btn btn-circle purple btn-sm', 'href' => '#', 'data-toggle' => 'dropdown']);
                echo Html::tag('i', '', ['class' => 'fa fa-check-square-o']);
                echo Html::tag('i', '', ['class' => 'fa fa-angle-down']);
            echo Html::endTag('a');

            echo Html::beginTag('ul', ['class' => 'dropdown-menu pull-right']);
                foreach($this->buttons as $button) {
                    echo Html::tag('li', $button);
                }
            echo Html::endTag('ul');

        echo Html::endTag('div');
    }
}
