<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 22.07.15
 * Time: 14:50
 *
 * Documentation:
 * paper-radio-group allows user to select only one radio button from a set. Checking one radio button
 * that belongs to a radio group unchecks any previously checked radio button within the same group.
 * Use selected to get or set the selected radio button.
 */

namespace p0larbeer\yii\polymer\paper;

use yii\helpers\Html;
use p0larbeer\yii\polymer\Widget;

/**
 * For example:
 *
 * ```php
 * echo RadioGroup::widget([
 *     'items' => [
 *         [
 *             'name' => 'o',
 *             'label' => 'One',
 *             'selected' => true
 *         ],
 *         [
 *             'name' => 't',
 *             'label' => 'Two',
 *             'options' => ['class' => 'myClass'],
 *         ],
 *     ],
 * ]);
 * ```
 *
 */

class RadioGroup extends Widget
{
    /**
     * @var string the tag to use to render the element
     */
    public $tagName = 'paper-radio-group';
    /**
     * @var array
     */
    public $items = [];

    public function init()
    {
        $view = $this->getView();
        RadioGroupAsset::register($view);
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
                $this->options['selected'] = $item['name'];
                unset($item['selected']);
            }
            $html .= RadioButton::widget($item);
        }
        return $html;
    }
}
