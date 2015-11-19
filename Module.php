<?php

namespace anli\metronic;

class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'anli\metronic\controllers';

    /**
     * @var string
     */
    public $headerPath = '_header';
    /**
     * @var string
     */
    public $footerPath = '_footer';
    /**
     * @var string
     */
    public $sidebarPath = '_sidebar';
}
