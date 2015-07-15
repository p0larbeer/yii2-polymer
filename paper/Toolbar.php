<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 16.07.15
 * Time: 0:27
 */

namespace p0larbeer\yii\polymer\paper;

use yii\helpers\Html;
use p0larbeer\yii\polymer\Widget;

class Toolbar extends Widget
{
    /**
     * @var string the tag to use to render the button
     */
    public $tagName = 'paper-toolbar';
    /**
     * @var string the dialog content
     */
    public $content;
    /**
     * @var boolean whether the content should be HTML-encoded.
     */
    public $encodeContent = true;

    public function init()
    {
        $view = $this->getView();
        ToolbarAsset::register($view);
    }
    public function run()
    {
        return Html::tag(
            $this->tagName,
            $this->encodeContent ? Html::encode($this->content) : $this->content,
            $this->options
        );
    }
}
