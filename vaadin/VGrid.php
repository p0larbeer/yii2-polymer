<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 25.07.15
 * Time: 13:05
 */

namespace p0larbeer\yii\polymer\vaadin;

use yii\helpers\Html;
use p0larbeer\yii\polymer\Widget;

/**
 * @see http://vaadin.github.io/components-apidoc/#v-grid
 *
 * For example:
 *
 * ```php
 * echo VGrid::widget([
 *     'col' => [
 *         ['name' => 'user.name.first', 'header-text' => 'First Name'],
 *         ['name' => 'user.name.last', 'header-text' => 'Last Name']
 *     ],
 * ]);
 * ```
 *
 */
class VGrid extends Widget
{
    /**
     * @var string the tag to use to render the element
     */
    public $tagName = 'v-grid';
    /**
     * @var array
     */
    public $col = [];


    public function init()
    {
        $view = $this->getView();
        VaadinAsset::register($view);
        echo Html::beginTag($this->tagName, $this->options);
    }

    public function run()
    {
        $html = Html::beginTag('table')
            . Html::beginTag('colgroup')
            . $this->renderColumns()
            . Html::endTag('colgroup')
            . Html::endTag('table');
        return $html . Html::endTag($this->tagName);
    }

    private function renderColumns()
    {
        $html = '';
        foreach ($this->col as $col) {
            $html .= Html::beginTag('col', $col);
        }
        return $html;
    }
}
