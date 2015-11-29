<?php namespace light\widgets;

use Yii;
use yii\helpers\Json;
use yii\web\AssetBundle;
use yii\web\View;

class SweetSubmitAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $js = ['yii.enhance.js'];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\YiiAsset',
    ];

    public $publishOptions = [
        'forceCopy' => true,

    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->sourcePath = __DIR__ . DIRECTORY_SEPARATOR . 'dist' . DIRECTORY_SEPARATOR;

        $this->initLocale();
        $this->initOptions();
    }

    /**
     * Init plugin optins
     */
    protected function initOptions()
    {
        $view = Yii::$app->view;

        $opts = [
            'confirmButtonText' => Yii::t('sweetsubmit', 'confirmButtonText'),
            'cancelButtonText' => Yii::t('sweetsubmit', 'cancelButtonText'),
        ];
        $opts = Json::encode($opts);

        $view->registerJs("yii.sweetSubmitOptions = $opts;", View::POS_END);
    }
    /**
     * Init locale
     */
    protected function initLocale()
    {
        Yii::$app->i18n->translations['sweetsubmit'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'basePath' => __DIR__ . DIRECTORY_SEPARATOR . 'messages',
        ];
    }
}
