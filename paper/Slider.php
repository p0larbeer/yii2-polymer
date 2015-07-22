<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 22.07.15
 * Time: 15:20
 *
 * Documentation:
 * paper-slider allows user to select a value from a range of values by moving the slider thumb.
 * The interactive nature of the slider makes it a great choice for settings that reflect intensity levels,
 * such as volume, brightness, or color saturation.
 */

namespace p0larbeer\yii\polymer\paper;

use yii\helpers\Html;
use p0larbeer\yii\polymer\Widget;

class Slider extends Widget
{
    /**
     * @var string the tag to use to render the element
     */
    public $tagName = 'paper-slider';
    /**
     * @var int
     */
    public $value;

    public function init()
    {
        $view = $this->getView();
        SliderAsset::register($view);
    }

    public function run()
    {
        $this->options['value'] = $this->value;
        return Html::tag($this->tagName, '', $this->options);
    }
}
