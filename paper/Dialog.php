<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 15.07.15
 * Time: 16:30
 *
 * Documentation:
 * <paper-dialog> is a dialog with Material Design styling and optional animations when it is opened or closed.
 * It provides styles for a header, content area, and an action area for buttons.
 * You can use the <paper-dialog-scrollable element (in its own repository) if you need a scrolling content area.
 * See Polymer.PaperDialogBehavior for specifics.
 */

namespace p0larbeer\yii\polymer\paper;

use yii\helpers\Html;
use p0larbeer\yii\polymer\Widget;

class Dialog extends Widget
{
    /**
     * @var string the tag to use to render the element
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
