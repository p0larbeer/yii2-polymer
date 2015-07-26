<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 26.07.15
 * Time: 11:24
 *
 * Documentation:
 * paper-scroll-header-panel contains a header section and a content section. The header is initially on the top part
 * of the view but it scrolls away with the rest of the scrollable content. Upon scrolling slightly up at any point,
 * the header scrolls back into view. This saves screen space and allows users to access important controls by easily
 * moving them back to the view.
 * Important: The paper-scroll-header-panel will not display if its parent does not have a height.
 *
 * @see https://elements.polymer-project.org/elements/paper-scroll-header-panel
 */

namespace p0larbeer\yii\polymer\paper;

use yii\helpers\Html;
use p0larbeer\yii\polymer\Widget;

class ScrollHeaderPanel extends Widget
{
    /**
     * @var string the tag to use to render the element
     */
    public $tagName = 'paper-scroll-header-panel';


    public function init()
    {
        $view = $this->getView();
        ScrollHeaderPanelAsset::register($view);
        echo Html::beginTag($this->tagName, $this->options);
    }

    public function run()
    {
        return Html::endTag($this->tagName);
    }
}
