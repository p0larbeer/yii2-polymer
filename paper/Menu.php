<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 22.07.15
 * Time: 16:26
 *
 * Documentation:
 * <paper-menu> implements an accessible menu control with Material Design styling.
 * The focused item is highlighted, and the selected item has bolded text.
 */

namespace p0larbeer\yii\polymer\paper;

use yii\helpers\Html;
use p0larbeer\yii\polymer\Widget;

/**
 * For example:
 *
 * ```php
 * echo Menu::widget([
 *     'items' => [
 *         [
 *             'content' => 'One',
 *             'selected' => true
 *         ],
 *         [
 *             'content' => 'Two',
 *             'options' => ['class' => 'myClass'],
 *         ],
 *     ],
 * ]);
 * ```
 *
 */
class Menu extends Widget
{
    /**
     * @var string the tag to use to render the element
     */
    public $tagName = 'paper-menu';
    /**
     * @var array
     */
    public $items = [];
    /**
     * @var bool Make a multi-select menu with the multi attribute.
     * Items in a multi-select menu can be deselected, and multiple item can be selected.
     */
    public $multi = false;

    public function init()
    {
        $view = $this->getView();
        MenuAsset::register($view);
    }

    public function run()
    {
        $this->options['multi'] = $this->multi;
        return Html::tag(
            $this->tagName,
            $this->renderItems(),
            $this->options
        );
    }

    /**
     * Renders tab items as specified on [[items]].
     * @return string the rendering result.
     */
    protected function renderItems()
    {
        $html = '';
        foreach ($this->items as $n => $item) {
            if ($item['selected']) {
                $this->options['selected'] = $n;
                unset($item['selected']);
            }
            $html .= Item::widget($item);
        }
        return $html;
    }
}
