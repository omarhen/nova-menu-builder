<?php

namespace OptimistDigital\MenuBuilder\Nova\Fields;

use Laravel\Nova\Fields\Field;
use OptimistDigital\MenuBuilder\MenuBuilder;

class MenuBuilderField extends Field
{
    public $component = 'menu-builder-field';

    public function __construct($name, $attribute = null, callable $resolveCallback = null)
    {
        $this->withMeta([
            'locales' => MenuBuilder::getLocales()
        ]);
    }
}
