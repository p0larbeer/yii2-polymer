<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 16.07.15
 * Time: 15:38
 *
 * Documentation:
 * paper-fab is a floating action button. It contains an image placed in the center and comes in two sizes:
 * regular size and a smaller size by applying the attribute mini. When the user touches the button,
 * a ripple effect emanates from the center of the button.
 * You may import iron-icons to use with this element, or provide a URL to a custom icon. See iron-iconset
 * for more information about how to use a custom icon set.
 */

namespace p0larbeer\yii\polymer\paper;

use yii\helpers\Html;
use p0larbeer\yii\polymer\Widget;

class Fab extends Widget
{
    /**
     * @var string the tag to use to render the element
     */
    public $tagName = 'paper-fab';
    /**
     * @var string Specifies the icon name or index in the set of icons available in the icon's icon set.
     * If the icon property is specified, the src property should not be.
     */
    public $icon;
    /**
     * @var string The URL of an image for the icon. If the src property is specified, the icon property should not be.
     */
    public $src;
    /**
     * @var boolean Set this to true to style this is a "mini" FAB.
     */
    public $mini = false;

    public function init()
    {
        $view = $this->getView();
        FabAsset::register($view);
    }
    public function run()
    {
        $this->options['mini'] = $this->mini;
        $this->options['icon'] = $this->icon;
        $this->options['src'] = $this->src;
        return Html::Tag($this->tagName,'',$this->options);
    }
}
