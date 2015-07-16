<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 16.07.15
 * Time: 15:38
 *
 * Documentation:
 * paper-icon-button is a button with an image placed at the center. When the user touches the button,
 * a ripple effect emanates from the center of the button.
 * paper-icon-button includes a default icon set. Use icon to specify which icon from the icon set to use.
 */

namespace p0larbeer\yii\polymer\paper;

use yii\helpers\Html;
use p0larbeer\yii\polymer\Widget;

class IconButton extends Widget
{
    /**
     * @var string the tag to use to render the element
     */
    public $tagName = 'paper-icon-button';
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
     * @var string Specifies the alternate text for the button, for accessibility.
     */
    public $alt;

    public function init()
    {
        $view = $this->getView();
        IconButtonAsset::register($view);
    }
    public function run()
    {
        $this->options['alt'] = $this->alt;
        $this->options['icon'] = $this->icon;
        $this->options['src'] = $this->src;
        return Html::Tag($this->tagName,'',$this->options);
    }
}
