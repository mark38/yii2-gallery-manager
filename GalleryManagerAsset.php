<?php

namespace mark38\galleryManager;

use yii\web\AssetBundle;

class GalleryManagerAsset extends AssetBundle
{
    public $sourcePath = 'mark38/galleryManager/assets';
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
}