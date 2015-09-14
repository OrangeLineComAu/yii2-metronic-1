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
 * This is the portlet widget class.
 *
 * ```php
 * use anli\metronic\widgets\Portlet;
 *
 * <?php Portlet::begin(['id' => 'user-portlet', 'title' => 'Users', 'subtitle' => 'showing all users...' ]); ?>
 * ...
 * <?php Portlet::end(); ?>
 * ```
 *
 * @author Su Anli <anli@euqol.com>
 * @since 1.0.0
 */
class Portlet extends Widget
{
    /**
     * @param string
     */
    public $id = '';

    /**
     * @param string the font icon to be used
     */
    public $fontIcon = '';

    /**
     * @param string the title for the portlet
     */
    public $title = '';

    /**
     * @param string the subtitle for the portlet
     */
    public $subtitle = '';

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

        echo Html::beginTag('div', ['class' => 'portlet light', 'id' => $this->id]);
            echo Html::beginTag('div', ['class' => 'portlet-title tabbable-line']);
                echo Html::beginTag('div', ['class' => 'caption']);
                    echo $this->renderCaption();
                echo Html::endTag('div');

                echo $this->renderButtons();

            echo Html::endTag('div');

            echo Html::beginTag('div', ['class' => 'portlet-body']);
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        echo Html::endTag('div');
        echo Html::endTag('div');
    }

    /**
     * Renders caption
     * @return string the rendering caption.
     */
    protected function renderCaption()
    {
        $icon = Html::tag('i', '', ['class' => "fa $this->fontIcon; font-green-sharp"]);
        $title = Html::tag('span', $this->title, ['class' => 'caption-subject font-green-sharp bold uppercase']);
        $subtitle = Html::tag('span', $this->subtitle, ['class' => 'caption-helper']);

        return "$icon\n$title\n$subtitle\n";
    }

    /**
     * Renders button
     * @return string the rendering button.
     */
    protected function renderButtons()
    {
        if (!empty($this->buttons)) {
            $html = '';

            foreach ($this->buttons as $button) {
                    $html .= "$button\n";
            }

            return Html::tag('div', $html, ['class' => 'actions btn-set']);
        }

        return '';
    }
}
