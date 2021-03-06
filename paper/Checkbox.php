<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 16.07.15
 * Time: 15:03
 *
 * Documentation:
 * paper-checkbox is a button that can be either checked or unchecked. User can tap the checkbox to check or uncheck it.
 * Usually you use checkboxes to allow user to select multiple options from a set. If you have a single ON/OFF option,
 * avoid using a single checkbox and use paper-toggle-button instead.
 */

namespace p0larbeer\yii\polymer\paper;

use yii\helpers\Html;
use p0larbeer\yii\polymer\Widget;

class Checkbox extends Widget
{
    /**
     * @var string the tag to use to render the element
     */
    public $tagName = 'paper-checkbox';
    /**
     * @var string the checkbox label
     */
    public $label;
    /**
     * @var boolean whether the label should be HTML-encoded.
     */
    public $encodeLabel = true;
    /**
     * @var boolean Gets or sets the state, true is checked and false is unchecked.
     */
    public $checked = false;
    /**
     * @var boolean If true, the button toggles the active state with each tap or press of the spacebar.
     */
    public $toggles = false;

    public function init()
    {
        $view = $this->getView();
        CheckboxAsset::register($view);
    }
    public function run()
    {
        $this->options['checked'] = $this->checked;
        $this->options['toggles'] = $this->toggles;
        return Html::tag(
            $this->tagName,
            $this->encodeLabel ? Html::encode($this->label) : $this->label,
            $this->options
        );
    }
}
