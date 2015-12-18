<?php
/**
 * @link http://www.euqol.com/
 * @copyright Copyright (c) 2015 Su Anli
 * @license http://www.euqol.com/license/
 */

namespace anli\metronic\widgets;

use Yii;
use yii\bootstrap\Widget;
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * This is the Dropdown widget class.
 * @author Su Anli <anli@euqol.com>
 * @since 2.0.0
 */
class Dropdown extends Widget
{
    /**
     * @var mixed
     */
    public $button;

    /**
     * @var array
     */
    public $items;

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
        echo $this->renderButton();
        echo $this->renderDropdown();
        echo Html::endTag('div');
    }

    /**
     * @return mixed
     */
    private function renderButton()
    {
        return isset($this->button) ? $this->button : Html::a(Html::tag('i', '', ['class' => 'fa fa-check-square-o', 'data-toggle' => 'tooltip', 'title' => 'Update Selected to..',]) . ' ' . Html::tag('i', '', ['class' => 'fa fa-angle-down']), false, ['data-toggle' => 'dropdown', 'class' => 'btn btn-circle red btn-sm dropdown-toggle', 'accesskey' => '']);
    }

    /**
     * @return mixed
     */
    private function renderDropdown()
    {
        return \yii\bootstrap\Dropdown::widget([
            'items' => $this->items,
            'options' => ['class' => 'pull-right']
        ]);
    }
}
