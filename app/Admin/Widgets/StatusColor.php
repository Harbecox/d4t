<?php

namespace App\Admin\Widgets;

use Dcat\Admin\Widgets\Widget;

class StatusColor extends Widget
{

    protected string $background;
    protected $view = "admin.widgets.status-color";

    function __construct($background)
    {
        $this->background = $background;
    }

    public function defaultVariables(): array
    {
        return [
            'background' => $this->background,
        ];
    }

}