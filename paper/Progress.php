<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 22.07.15
 * Time: 14:59
 *
 * Documentation:
 * The progress bars are for situations where the percentage completed can be determined.
 * They give users a quick sense of how much longer an operation will take.
 */

namespace p0larbeer\yii\polymer\paper;

use yii\helpers\Html;
use p0larbeer\yii\polymer\Widget;

class Progress extends Widget
{
    /**
     * @var string the tag to use to render the element
     */
    public $tagName = 'paper-progress';
    /**
     * @var int
     */
    public $value = 0;
    /**
     * @var int
     */
    public $secondary;

    public function init()
    {
        $view = $this->getView();
        ProgressAsset::register($view);
    }

    public function run()
    {
        $this->options['value'] = $this->value;
        $this->options['secondary-progress'] = $this->secondary;
        return Html::tag($this->tagName, '', $this->options);
    }
}
