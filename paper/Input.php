<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 16.07.15
 * Time: 23:37
 *
 * Documentation:
 * <paper-input> is a single-line text field with Material Design styling.
 */

namespace p0larbeer\yii\polymer\paper;

use yii\helpers\Html;
use p0larbeer\yii\polymer\Widget;

class Input extends Widget
{
    public $tagName = 'paper-input';
    /**
     * @var string the button label
     */
    public $label;
    public $errorMessage;

    public function init()
    {
        $view = $this->getView();
        InputAsset::register($view);
    }
    public function run()
    {
        $this->options['label'] = $this->label;
        $this->options['error-message'] = $this->errorMessage;
        return Html::tag($this->tagName,null,$this->options);
    }
}
