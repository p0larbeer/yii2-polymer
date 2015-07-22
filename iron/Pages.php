<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 22.07.15
 * Time: 16:52
 *
 * Documentation:
 * iron-pages is used to select one of its children to show. One use is to cycle through a list of children "pages".
 */

namespace p0larbeer\yii\polymer\iron;

use yii\helpers\Html;
use p0larbeer\yii\polymer\Widget;

/**
 * For example:
 *
 * ```php
 * echo Pages::widget([
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
class Pages extends Widget
{
    /**
     * @var string the tag to use to render the element
     */
    public $tagName = 'iron-pages';
    /**
     * @var array
     */
    public $items = [];

    public function init()
    {
        $view = $this->getView();
        PagesAsset::register($view);
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
            if ($item['selected']) {
                $this->options['selected'] = $n;
                unset($item['selected']);
            }
            $html .= Html::tag('div', $item['content'], $item['options']);
        }
        return $html;
    }
}
