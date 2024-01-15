<?php

namespace App\Admin\Widgets;

use Dcat\Admin\Widgets\Widget;

class InterButton extends Widget
{

    protected $view = "admin.widgets.inter-button";
    protected string $text;
    protected string|null $icon = null;
    function __construct($text,$icon = null)
    {
        $this->text = $text;
        $this->icon = $icon;
    }

    public function defaultVariables(): array
    {
        return [
            'text' => $this->text,
            'icon' => $this->icon
        ];
    }
}