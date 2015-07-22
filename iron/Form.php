<?php
/**
 * Created by PhpStorm.
 * User: p0larbeer
 * Date: 22.07.15
 * Time: 18:54
 *
 * Documentation:
 * <iron-form> is an HTML <form> element that can validate and submit any custom elements
 * that implement Polymer.IronFormElementBehavior, as well as any native HTML elements.
 */

namespace p0larbeer\yii\polymer\iron;

use yii\helpers\Html;
use p0larbeer\yii\polymer\Widget;

/**
 * For example:
 *
 * ```php
 * echo Form::begin($options);
 * echo  Paper\Input::widget(['name'=>'Name','label'=>'Label']);
 * echo Form::end();
 * ```
 *
 */

class Form extends Widget
{
    /**
     * @var string the tag to use to render the element
     */
    public $tagName = 'iron-form';

    public function init()
    {
        $view = $this->getView();
        FormAsset::register($view);
        $this->options['is'] = $this->tagName;
        echo Html::beginTag('form', $this->options);
    }

    public function run()
    {
        return Html::endTag('form');
    }
}

