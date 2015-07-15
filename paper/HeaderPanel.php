<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 16.07.15
 * Time: 1:00
 */

namespace p0larbeer\yii\polymer\paper;

use yii\helpers\Html;
use p0larbeer\yii\polymer\Widget;

class HeaderPanel extends  Widget
{
    /**
     * @var string the tag to use to render the element
     */
    public $tagName = 'paper-header-panel';
    /**
     * @var string The class used in waterfall-tall mode.
     * Change this if the header accepts a different class for toggling height, e.g. "medium-tall"
     */
    public $tallClass = 'tall';
    /**
     * @var string Controls header and scrolling behavior.
     * Options are standard, seamed, waterfall, waterfall-tall, scroll and cover. Default is standard.
     */
    public $mode = 'standard';
    /**
     * @var boolean If true, the scroller is at the top
     */
    public $atTop = true;
    /**
     * @var boolean If true, the drop-shadow is always shown no matter what mode is set to.
     */
    public $shadow = false;

    public function init()
    {
        $view = $this->getView();
        HeaderPanelAsset::register($view);
        if($this->tallClass !== 'tall'){
            $this->options['tall-class'] = $this->tallClass;
        }
        $this->options['at-top'] = $this->atTop;
        $this->options['shadow'] = $this->shadow;
        $this->options['mode'] = $this->mode;
        return Html::beginTag($this->tagName,$this->options);
    }
    public function run()
    {
        return Html::endTag($this->tagName);
    }
}

