<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 16.07.15
 * Time: 1:29
 *
 * Documentation:
 * paper-material is a container that renders two shadows on top of each other to create the effect
 * of a lifted piece of paper.
 */

namespace p0larbeer\yii\polymer\paper;

use yii\helpers\Html;
use p0larbeer\yii\polymer\Widget;

class Material extends Widget
{
    /**
     * @var string the tag to use to render the element
     */
    public $tagName = 'paper-material';
    /**
     * @var string the material content
     */
    public $content;
    /**
     * @var boolean Set this to true to animate the shadow when setting a new elevation value.
     */
    public $animated = false;
    /**
     * @var number The z-depth of this element, from 0-5. Setting to 0 will remove the shadow,
     * and each increasing number greater than 0 will be "deeper" than the last.
     */
    public $elevation = 1;

    public function init()
    {
        $view = $this->getView();
        MaterialAsset::register($view);
    }
    public function run()
    {
        $this->options['animated'] = $this->animated;
        $this->options['elevation'] = $this->elevation;
        return Html::tag(
            $this->tagName,
            $this->content,
            $this->options
        );
    }
}

