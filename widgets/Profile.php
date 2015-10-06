<?php
/**
 * @link http://www.euqol.com/
 * @copyright Copyright (c) 2015 Su Anli
 * @license http://www.euqol.com/license/
 */

namespace anli\metronic\widgets;

use anli\metronic\assets\ProfileAsset;
use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap\Widget;
use yii\bootstrap\BootstrapPluginAsset;
use yii\widgets\Menu;

/**
 * This is the profile widget class.
 *
 * ```php
 * use anli\metronic\widgets\Profile;
 *
 *  <?php Profile::begin([
 *            'imageUrl' => 'https://s.gravatar.com/avatar/ecd2a5b6d5a2d17e7bd9169b6f12515b?s=480&r=pg&d=https%3A%2F%2Fcdn.auth0.com%2Favatars%2Fjo.png',
 *            'title' => Html::encode($this->title),
 *            'caption' => 'This is a caption',
 *            'buttons' => [
 *                Html::a('<i class="fa fa-pencil"></i>', false, ['value' => Url::to(["$controllerUrlName/update", 'id' => $model->id]), 'data-toggle' => 'tooltip', 'title' => "Update", 'class' => 'showModalButton btn btn-circle green-haze btn-sm', 'accesskey' => '']),
 *            ],
 *            'statItems' => [
 *                ['title' => 74, 'caption' => 'Caption for 74'],
 *                ['title' => 23, 'caption' => 'Caption for 23'],
 *            ],
 *            'menuItems' => [
 *                ['label' => 'Link 1', 'url' => ['site/index']],
 *                ['label' => 'Link 2', 'url' => ['site/index']],
 *            ],
 *            'summary' => [
 *                'title' => 'This is a title',
 *                'caption' => 'This is a caption',
 *                'items' => [
 *                    '<a>item A</a>',
 *                    '<a>item B</a>',
 *                    '<a>item C</a>',
 *                ],
 *            ],
 *        ]); ?>
 * ...
 * <?php Profile::end(); ?>
 * ```
 *
 * @author Su Anli <anli@euqol.com>
 * @since 1.6.0
 */
class Profile extends Widget
{
    /**
     * @param string
     */
    public $imageUrl;

    /**
     * @param string
     */
    public $title = '';

    /**
     * @param string
     */
    public $caption = '';

    /**
     * @param array the buttons
     */
    public $buttons = [];

    /**
     * @param array
     */
    public $menuItems = [];

    /**
     * @param array
     */
    public $statItems = [];

    /**
     * @param array
     */
    public $summary = [];

    /**
     * Initializes the widget.
     */
    public function init()
    {
        parent::init();

        ProfileAsset::register($this->view);

        echo $this->renderSidebar();

        echo Html::beginTag('div', ['class' => 'profile-content']);
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        echo Html::endTag('div');
    }

    /**
     * @return string
     */
    protected function renderSidebar()
    {
        $html = '';
        $html .= Html::beginTag('div', ['class' => 'profile-sidebar', 'style' => 'width: 250px;']);
            $html .= Html::beginTag('div', ['class' => 'portlet light profile-sidebar-portlet']);

                $html .= $this->renderImage();

                $html .= Html::beginTag('div', ['class' => 'profile-usertitle']);
                    $html .= Html::tag('div', $this->title, ['class' => 'profile-usertitle-name']);
                    $html .= Html::tag('div', $this->caption, ['class' => 'profile-usertitle-job']);
                $html .= Html::endTag('div');

                $html .= $this->renderButtons();

                $html .= Html::tag('div', $this->renderMenu(), ['class' => 'profile-usermenu']);
            $html .= Html::endTag('div');

            if (!empty($this->statItems) || !empty($this->statItems)) {
                $html .= Html::beginTag('div', ['class' => 'portlet light']);
                    $html .= $this->renderStat();
                    $html .= $this->renderSummary();
                $html .= Html::endTag('div');
            }

        $html .= Html::endTag('div');

        return $html;
    }


    /**
     * @return string
     */
    protected function renderMenu()
    {
        return Menu::widget([
            'items' => $this->menuItems,
            'options' => ['class' => 'nav']
        ]);
    }

    /**
     * @return string
     */
    protected function renderStat()
    {
        if (!empty($this->statItems)) {
            $html = '';
            $divider = 12 / count($this->statItems);

            foreach ($this->statItems as $item) {
                $html .= Html::beginTag('div', ['class' => "col-md-$divider col-sm-$divider col-xs-6"]);
                    $html .= Html::tag('div', $item['title'], ['class' => "uppercase profile-stat-title"]);
                    $html .= Html::tag('div', $item['caption'], ['class' => "uppercase profile-stat-text"]);
                $html .= Html::endTag('div');
            }

            return Html::tag('div', $html, ['class' => 'row list-separated profile-stat']);
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderSummary()
    {
        if (!empty($this->summary)) {
            $html = '';
            $html .= Html::tag('h4', $this->summary['title'], ['class' => 'profile-desc-title']);
            $html .= Html::tag('span', $this->summary['caption'], ['class' => 'profile-desc-text']);

            if (!empty($this->summary['items'])) {
                foreach ($this->summary['items'] as $item) {
                    $html .= Html::tag('div', $item, ['class' => 'margin-top-20 profile-desc-link']);
                }
            }

            return $html;
        }

        return '';
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
                    $html .= "$button";
            }

            return Html::tag('div', $html, ['class' => 'profile-userbuttons']);
        }

        return '';
    }

    /**
     * @return string
     */
    protected function renderImage()
    {
        if (isset($this->imageUrl)) {
            $html = '';

            $html .= Html::beginTag('div', ['class' => 'profile-userpic']);
                $html .= Html::img($this->imageUrl, ['class' => 'img-responsive']);
            $html .= Html::endTag('div');

            return $html;
        }
        return '';
    }
}
