<?php
/**
 * Created by PhpStorm.
 * User: phpNT - http://phpnt.com
 * Date: 11.04.2017
 * Time: 13:47
 */

namespace phpnt\slimscroll;

use yii\web\AssetBundle;

/**
 * Class AssetBundle
 */
class SlimScrollAsset extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@bower/slimscroll';

    /**
     * @inherit
     */
    public $css = [

    ];

    /**
     * @inherit
     */
    public $js = [
        'jquery.slimscroll.min.js',
    ];

    public function init()
    {
        $this->registerJs();
        parent::init();
    }

    protected function registerJs()
    {
        $js = <<<JS
        $('.slimScroll').slimScroll();
JS;
        \Yii::$app->view->registerJs($js);
        return $this;
    }
}