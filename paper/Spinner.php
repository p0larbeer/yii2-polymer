<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 22.07.15
 * Time: 15:23
 *
 * Documentation:
 * Element providing material design circular spinner.
 */

namespace p0larbeer\yii\polymer\paper;

use yii\helpers\Html;
use p0larbeer\yii\polymer\Widget;

class Spinner extends Widget
{
    /**
     * @var string the tag to use to render the element
     */
    public $tagName = 'paper-spinner';
    /**
     * @var boolean Displays the spinner.
     */
    public $active = false;

    public function init()
    {
        $view = $this->getView();
        SpinnerAsset::register($view);
    }

    public function run()
    {
        $this->options['active'] = $this->active;
        return Html::tag($this->tagName, '', $this->options);
    }
}
