<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 16.07.15
 * Time: 15:26
 *
 * Documentation:
 * paper-drawer-panel contains a drawer panel and a main panel. The drawer and the main panel are side-by-side
 * with drawer on the left. When the browser window size is smaller than the responsiveWidth, paper-drawer-panel
 * changes to narrow layout. In narrow layout, the drawer will be stacked on top of the main panel.
 * The drawer will slide in/out to hide/reveal the main panel.
 *
 * Use the attribute drawer to indicate that the element is the drawer panel and main
 * to indicate that the element is the main panel.
 *
 * Example:
 * <paper-drawer-panel>
 *      <div drawer> Drawer panel... </div>
 *      <div main> Main panel... </div>
 * </paper-drawer-panel>
 */

namespace p0larbeer\yii\polymer\paper;

use yii\helpers\Html;
use p0larbeer\yii\polymer\Widget;


class DrawerPanel extends Widget
{
    /**
     * @var string the tag to use to render the element
     */
    public $tagName = 'paper-drawer-panel';
    /**
     * @var boolean If true, position the drawer to the right.
     */
    public $rightDrawer = false;
    public function init()
    {
        $view = $this->getView();
        DrawerPanelAsset::register($view);
        $this->options['right-drawer'] = $this->rightDrawer;
        echo Html::beginTag($this->tagName,$this->options);
    }
    public function run()
    {
        return Html::endTag($this->tagName);
    }
}
