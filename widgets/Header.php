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
 * This is the Heder widget class.
 * @author Su Anli <anli@euqol.com>
 * @since 2.0.0
 */
class Header extends Widget
{
    /**
     * @var string
     */
    public $profileUrl = '';

    /**
     * @var mixed
     */
    public $logoUrl;

    /**
     * @var string
     */
    public $tenantName;

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
        echo Html::beginTag('div', ['class' => 'page-header navbar navbar-fixed-top']);
        echo Html::beginTag('div', ['class' => 'page-header-inner']);
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        echo $this->renderLogo();
        echo $this->renderMenuToggler();
        echo $this->renderNavigationMenu();

        echo Html::endTag('div');   //page-header-inner
        echo Html::endTag('div');   // page-header
    }

    /**
     * @return mixed
     */
    private function renderLogo()
    {
        $html = '';
        $html .= Html::beginTag('div', ['class' => 'page-logo']);
        $html .= Html::a(
            isset($this->logoUrl) ? $this->logoUrl : '',
            Yii::$app->homeUrl
        );
        $html .= Html::tag('div', '', ['class' => 'menu-toggler sidebar-toggler']);
        $html .= Html::endTag('div');   // page-logo
        return $html;
    }

    /**
     * @return mixed
     */
    private function renderMenuToggler()
    {
        return Html::a('', 'javascript:;', ['class' => 'menu-toggler responsive-toggler', 'data-toggle' => 'collapse', 'data-target' => '.navbar-collapse']);
    }

    /**
     * @return mixed
     */
    private function renderNavigationMenu()
    {
        $html = '';
        $html .= Html::beginTag('div', ['class' => 'page-top']);
        $html .= Html::beginTag('div', ['class' => 'top-menu']);
        $html .= Html::beginTag('ul', ['class' => 'nav navbar-nav pull-right']);
        $html .= Html::beginTag('li', ['class' => 'dropdown dropdown-user']);
        $html .= Html::a(
            Html::img($this->profileUrl, ['alt' => '', 'class' =>'img-circle'])
                . Html::tag('span', Html::tag('small', $this->tenantName), ['class' => 'username username-hide-on-mobile'])
                . Html::tag('i', '', ['class' => 'fa fa-angle-down']),
            '#',
            ['class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'data-hover' => 'dropdown', 'data-close-others' => 'true']
        );
        $html .= Html::ul(
            $this->items,
            [
                'class' => 'dropdown-menu dropdown-menu-default',
                'encode' => false,
            ]
        );
        $html .= Html::endTag('li');   // dropdown
        $html .= Html::endTag('ul');   // nav
        $html .= Html::endTag('div');   // top-menu
        $html .= Html::endTag('div');   // page-top
        return $html;
    }
}
