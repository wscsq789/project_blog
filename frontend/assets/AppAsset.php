<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'img/css/site.css',
        'img/css/style.css',
    	'img/js/jquery.min.js',
		'img/js/hover_pack.min.js',
    	//'img/js/echo.min.js',
    ];
    public $js = [
    	'img/js/jquery.min.js',
		'img/js/hover_pack.min.js'
	];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
