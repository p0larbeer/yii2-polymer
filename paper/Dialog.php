<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 15.07.15
 * Time: 16:30
 */

namespace p0larbeer\yii\polymer\paper;

use yii\helpers\Html;
use p0larbeer\yii\polymer\Widget;

class Dialog extends Widget
{
    /**
     * @var string the tag to use to render the button
     */
    public $tagName = 'paper-dialog';
    /**
     * @var string the dialog content
     */
    public $content;
    /**
     * @var boolean whether the content should be HTML-encoded.
     */
    public $encodeContent = true;
    /**
     * @var bool If true, the dialog should be styled with a modal.
     */
    public $modal = false;

    public function init()
    {
        $view = $this->getView();
        DialogAsset::register($view);
    }
    public function run()
    {
        $this->options['modal'] = $this->modal;
        return Html::tag(
            $this->tagName,
            $this->encodeContent ? Html::encode($this->content) : $this->content,
            $this->options
        );
    }
}