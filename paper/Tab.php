<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 22.07.15
 * Time: 12:19
 */

namespace p0larbeer\yii\polymer\paper;

use yii\helpers\Html;
use p0larbeer\yii\polymer\Widget;

class Tab extends Widget
{
    /**
     * @var string the tag to use to render the element
     */
    public $tagName = 'paper-tab';
    /**
     * @var string the button label
     */
    public $label = '';
    /**
     * @var boolean whether the label should be HTML-encoded.
     */
    public $encodeLabel = true;

    public function init()
    {
        $view = $this->getView();
        TabAsset::register($view);
    }
    public function run()
    {
        return Html::tag(
            $this->tagName,
            $this->encodeLabel ? Html::encode($this->label) : $this->label,
            $this->options
        );
    }
}
