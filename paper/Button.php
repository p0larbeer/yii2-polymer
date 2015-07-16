<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 15.07.15
 * Time: 14:41
 *
 * paper-button is a button. When the user touches the button, a ripple effect emanates from the point of contact.
 * It may be flat or raised. A raised button is styled with a shadow.
 */

namespace p0larbeer\yii\polymer\paper;

use yii\helpers\Html;
use p0larbeer\yii\polymer\Widget;

class Button extends Widget
{
    /**
     * @var string the tag to use to render the element
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
     * @var boolean If true, the button should be styled with a shadow.
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