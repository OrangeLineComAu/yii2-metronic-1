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

Usage
-----

Add to the `controller` or `module` file:

```
/**
 * @inheritdoc
 */
public $layout = '@vendor/anli/yii2-metronic/views/layouts/main';
```
