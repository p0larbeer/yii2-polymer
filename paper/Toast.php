<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 22.07.15
 * Time: 12:10
 *
 * Documentation:
 * paper-toast provides a subtle notification toast.
 */

namespace p0larbeer\yii\polymer\paper;

use yii\helpers\Html;
use p0larbeer\yii\polymer\Widget;

class Toast extends Widget
{
    /**
     * @var string the tag to use to render the element
     */
    public $tagName = 'paper-toast';
    /**
     * @var string The text to display in the toast.
     */
    public $text = '';
    /**
     * @var string the content toast
     */
    public $content = '';

    public function init()
    {
        $view = $this->getView();
        ToastAsset::register($view);
    }
    public function run()
    {
        $this->options['text'] = $this->text;
        return Html::tag(
            $this->tagName,
            $this->content,
            $this->options
        );
    }
}
