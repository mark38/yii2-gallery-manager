<?php

namespace mark38\galleryManager;

use yii\web\AssetBundle;

class GalleryManagerAsset extends AssetBundle
{
    public $css = [
        'galleryManager.css',
    ];
    public $js = [
        'galleryManager.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
        parent::init();
    }
}