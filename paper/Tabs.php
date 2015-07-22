<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 22.07.15
 * Time: 12:22
 *
 * Documentation:L
 * paper-tabs makes it easy to explore and switch between different views or functional aspects of an app,
 * or to browse categorized data sets.
 */

namespace p0larbeer\yii\polymer\paper;

use yii\helpers\Html;
use p0larbeer\yii\polymer\Widget;

/**
 * For example:
 *
 * ```php
 * echo Tabs::widget([
 *     'items' => [
 *         [
 *             'label' => 'One',
 *             'active' => true
 *         ],
 *         [
 *             'label' => 'Two',
 *             'options' => ['class' => 'myClass'],
 *         ],
 *     ],
 * ]);
 * ```
 *
 */

class Tabs extends Widget
{
    /**
     * @var string the tag to use to render the element
     */
    public $tagName = 'paper-tabs';
    /**
     * @var array
     */
    public $items = [];

    public function init()
    {
        $view = $this->getView();
        TabsAsset::register($view);
    }

    public function run()
    {
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
            if ($item['active']) {
                $this->options['selected'] = $n;
                unset($item['active']);
            }
            $html .= Tab::widget($item);
        }
        return $html;
    }

}
