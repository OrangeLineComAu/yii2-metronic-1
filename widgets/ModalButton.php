<?php
/**
 * @link http://www.euqol.com/
 * @copyright Copyright (c) 2015 Su Anli
 * @license http://www.euqol.com/license/
 */

namespace anli\metronic\widgets;

use anli\metronic\assets\ModalAsset;
use Yii;
use yii\bootstrap\Widget;
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * This is the Modal Button widget class.
 * @author Su Anli <anli@euqol.com>
 * @since 2.0.0
 */
class ModalButton extends Widget
{
    public $tooltipTitle = '';
    public $buttonCssClass = 'btn btn-circle green-haze btn-sm';
    public $url = '';
    public $buttonLabel = '';

    /**
     * Initializes the widget.
     */
    public function init()
    {
        parent::init();
        ModalAsset::register($this->getView());
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        echo Html::a($this->buttonLabel, false, [
            'value' => $this->url,
            'data-toggle' => 'tooltip', 'title' => $this->tooltipTitle,
            'class' => "showModalButton {$this->buttonCssClass}",
            'accesskey' => 'n',
        ]);
    }
}
