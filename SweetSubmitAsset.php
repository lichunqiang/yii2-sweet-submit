<?php

/*
 * This file is part of the light/yii2-sweet-submit.
 *
 * (c) lichunqiang <light-li@hotmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace light\widgets;

use Yii;
use yii\helpers\Json;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * sweet-submit asset.
 *
 * @version 1.0.0
 *
 * @author lichunqiang <light-li@hotmail.com>
 */
class SweetSubmitAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $js = ['yii.enhance.js'];

    /**
     * {@inheritdoc}
     */
    public $depends = [
        'yii\web\YiiAsset',
    ];

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        $this->sourcePath = __DIR__.DIRECTORY_SEPARATOR.'dist'.DIRECTORY_SEPARATOR;

        $this->initLocale();
        $this->initOptions();
    }

    /**
     * Init plugin optins.
     */
    protected function initOptions()
    {
        $view = Yii::$app->view;

        $opts = [
            'confirmButtonText' => Yii::t('sweetsubmit', 'Ok'),
            'cancelButtonText'  => Yii::t('sweetsubmit', 'Cancel'),
        ];
        $opts = Json::encode($opts);

        $view->registerJs("yii.sweetSubmitOptions = $opts;", View::POS_END);
    }
    /**
     * Init locale.
     */
    protected function initLocale()
    {
        Yii::$app->i18n->translations['sweetsubmit'] = [
            'class'    => 'yii\i18n\PhpMessageSource',
            'basePath' => __DIR__.DIRECTORY_SEPARATOR.'messages',
        ];
    }
}
