<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 22.07.15
 * Time: 14:45
 *
 * Documentation:
 * paper-radio-button is a button that can be either checked or unchecked.
 * User can tap the radio button to check or uncheck it.
 */

namespace p0larbeer\yii\polymer\paper;

use yii\helpers\Html;
use p0larbeer\yii\polymer\Widget;

class RadioButton extends Widget
{
    /**
     * @var string the tag to use to render the element
     */
    public $tagName = 'paper-radio-button';
    /**
     * @var string the checkbox label
     */
    public $label;
    /**
     * @var string the name attribute
     */
    public $name;
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
        $this->options['name'] = $this->name;
        $this->options['checked'] = $this->checked;
        $this->options['toggles'] = $this->toggles;
        return Html::tag(
            $this->tagName,
            $this->encodeLabel ? Html::encode($this->label) : $this->label,
            $this->options
        );
    }
}
