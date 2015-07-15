<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 15.07.15
 * Time: 14:41
 */

namespace p0larbeer\yii\polymer\paper;

use yii\helpers\Html;
use p0larbeer\yii\polymer\Widget;

class Button extends Widget
{
    /**
     * @var string the tag to use to render the button
     */
    public $tagName = 'paper-button';
    /**
     * @var string the button label
     */
    public $label = 'Button';
    /**
     * @var boolean whether the label should be HTML-encoded.
     */
    public $encodeLabel = true;
    /**
     * @var bool If true, the button should be styled with a shadow.
     */
    public $raised = false;

    public function init()
    {
        $view = $this->getView();
        ButtonAsset::register($view);
    }
    public function run()
    {
        $this->options['raised'] = $this->raised;
        return Html::tag(
            $this->tagName,
            $this->encodeLabel ? Html::encode($this->label) : $this->label,
            $this->options
        );
    }
}