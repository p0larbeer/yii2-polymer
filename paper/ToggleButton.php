<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 22.07.15
 * Time: 10:10
 *
 * Documentation:
 * paper-toggle-button provides a ON/OFF switch that user can toggle the state by tapping or by dragging the switch.
 */

namespace p0larbeer\yii\polymer\paper;

use yii\helpers\Html;
use p0larbeer\yii\polymer\Widget;

class ToggleButton extends Widget
{
    /**
     * @var string the tag to use to render the element
     */
    public $tagName = 'paper-toggle-button';
    /**
     * @var boolean If true, the button toggles the active state with each tap or press of the spacebar.
     */
    public $toggles = true;
    /**
     * @var boolean Gets or sets the state, true is checked and false is unchecked.
     */
    public $checked = false;
    public function init()
    {
        $view = $this->getView();
        ToggleButtonAsset::register($view);
    }
    public function run()
    {
        if(!$this->toggles){
            $this->options['toggles']=$this->toggles;
        }
        if($this->checked){
            $this->options['checked']=$this->checked;
        }
        return Html::tag($this->tagName,'',$this->options);
    }
}
