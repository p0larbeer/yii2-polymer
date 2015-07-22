<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 22.07.15
 * Time: 15:30
 */

namespace p0larbeer\yii\polymer\paper;


class Textarea extends Input
{

    /**
     * @var string the tag to use to render the element
     */
    public $tagName = 'paper-textarea';

    public function init()
    {
        $view = $this->getView();
        TextareaAsset::register($view);
    }
}
