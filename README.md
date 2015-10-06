anli\metronic
=============
Yii 2.0 Metronic Theme

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist anli/yii2-metronic "*"
```

or add

```
"anli/yii2-metronic": "*"
```

to the require section of your `composer.json` file.

Download the latest metronic files and copy the contents in the `theme` folder to `@web/metronic/theme/`.

Copy the contents of the `js` folder to the `@web/metronic/js/` folder.

Copy the contents of the `images` folder to the `@web/images/` folder.

Add to the module section in your `config.php`

```
'metronic' => [
    'class' => 'anli\metronic\Module',
    'headerPath' => '@app/views/layouts/metronic/_header',
    'sidebarPath' => '@app/views/layouts/metronic/_sidebar',
    'footerPath' => '@app/views/layouts/metronic/_footer',
],
```

Usage
-----

Add to the view file with:

    Yii::$app->controller->layout = '@vendor/anli/yii2-metronic/views/layouts/main';


Add to the `controller` or `module` file:

```
/**
 * @inheritdoc
 */
public $layout = '@vendor/anli/yii2-metronic/views/layouts/main';
```


Profile widget
-----

    use anli\metronic\widgets\Profile;
    ...

    <?php Profile::begin([
        'imageUrl' => 'https://s.gravatar.com/avatar/ecd2a5b6d5a2d17e7bd9169b6f12515b?s=480&r=pg&d=https%3A%2F%2Fcdn.auth0.com%2Favatars%2Fjo.png',
        'title' => Html::encode($this->title),
        'caption' => 'This is a caption',
        'buttons' => [
            Html::a('<i class="fa fa-pencil"></i>', false, ['value' => Url::to(["$controllerUrlName/update", 'id' => $model->id]), 'data-toggle' => 'tooltip', 'title' => "Update", 'class' => 'showModalButton btn btn-circle green-haze btn-sm', 'accesskey' => '']),
        ],
        'statItems' => [
            ['title' => 74, 'caption' => 'Caption for 74'],
            ['title' => 23, 'caption' => 'Caption for 23'],
        ],
        'menuItems' => [
            ['label' => 'Link 1', 'url' => ['site/index']],
            ['label' => 'Link 2', 'url' => ['site/index']],
        ],
        'summary' => [
            'title' => 'This is a title',
            'caption' => 'This is a caption',
            'items' => [
                '<a>item A</a>',
                '<a>item B</a>',
                '<a>item C</a>',
            ],
        ],
    ]); ?>
    ...
    <?php Profile::end(); ?>
