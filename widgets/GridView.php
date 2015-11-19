<?php
/**
 * @link http://www.euqol.com/
 * @copyright Copyright (c) 2015 Su Anli
 * @license http://www.euqol.com/license/
 */

namespace anli\metronic\widgets;

use anli\helper\assets\GridViewAsset;
use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap\Widget;
use yii\bootstrap\BootstrapPluginAsset;
use kartik\grid\GridView as BaseGridView;

/**
 * This is the grid view widget class.
 *
 * ```php
 * use anli\metronic\widgets\GridView;
 *
 * GridView::widget([
 *      'dataProvider' => $dataProvider,
 *      'columns' => $columns,
 * ]);
 * ...
 * <?php Portlet::end(); ?>
 * ```
 *
 * @author Su Anli <anli@euqol.com>
 * @since 1.0.0
 */
class GridView extends Widget
{
    /**
     * @param string
     */
    public $id = '';

    /**
     * @param mixed
     */
    public $dataProvider;

    /**
     * @param mixed
     */
    public $filterModel;

    /**
     * @param array
     */
    public $columns = [];

    /**
     * @param array
     */
    public $pjax;

    /**
     * @param array
     */
    protected $configs = [
        'options' => ['class' => 'table-scrollable table-scrollable-borderless'],
        'tableOptions' => ['class' => 'table table-hover table-light'],
        'summary' => '',
        'headerRowOptions' => ['class' => 'uppercase'],
        'export' => false,
        'pjax' => true,
    ];

    /**
     * Initializes the widget.
     */
    public function init()
    {
        parent::init();

        $this->configs = array_replace_recursive($this->configs, ['dataProvider' => $this->dataProvider]);
        $this->configs = array_replace_recursive($this->configs, ['columns' => $this->columns]);
        $this->configs = array_replace_recursive($this->configs, ['dataProvider' => $this->dataProvider]);
        $this->configs = array_replace_recursive($this->configs, ['filterModel' => $this->filterModel]);
        $this->configs = array_replace_recursive($this->configs, ['filterModel' => $this->pjax]);

        if ('' != $this->id) {
            $this->configs = array_replace_recursive($this->configs, ['id' => $this->id]);
        }

        GridViewAsset::register($this->getView());
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        echo BaseGridView::widget($this->configs);
    }
}
