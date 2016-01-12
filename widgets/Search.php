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
use yii\widgets\ActiveForm;

/**
 * This is the Search widget class.
 * @author Su Anli <anli@euqol.com>
 * @since 2.0.0
 */
class Search extends Widget
{
    /**
     * @var mixed
     */
    public $searchModel;

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
        echo Html::beginTag('div', ['class' => 'portlet-input input-inline']);
        echo Html::beginTag('div', ['class' => 'input-icon right']);
        echo Html::tag('i', '', ['class' => 'icon-magnifier']);

        ActiveForm::begin([
            'action' => $this->url,
            'method' => 'get',
        ]);
        echo Html::activeInput('text', $this->searchModel, 'searchField', ['class' => 'form-control input-circle', 'placeholder' => 'search...', 'autofocus' => true]);
        ActiveForm::end();

        echo Html::endTag('div');   // portlet-input input-inline
        echo Html::endTag('div');   // input-icon right
        echo ' ';
        echo Html::a(Html::tag('i', '', ['class' => 'fa fa-refresh']), $this->resetUrl, ['class' => 'btn btn-circle purple btn-sm', 'accesskey' => '',
            'data-toggle' => 'tooltip', 'title' => 'Reset Search',
        ]);
    }

    /**
     * @return array
     */
    public function getUrl()
    {
        return array_merge(['/' . Yii::$app->controller->route], Yii::$app->request->queryParams);
    }

    /**
     * @return array
     */
    public function getResetUrl()
    {
        $params = Yii::$app->request->queryParams;
        unset($params[$this->searchModelShortName]);

        return array_merge(['/' . Yii::$app->controller->route], $params);
    }

    /**
     * @return string
     */
    protected function getSearchModelShortName()
    {
        return (new \ReflectionClass($this->searchModel))->getShortName();
    }
}
