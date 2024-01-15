<?php

namespace App\Admin\Widgets;

use Dcat\Admin\Widgets\Widget;

class Tool extends Widget
{
    protected string $text;
    protected $view = 'admin.widgets.tool';
    function __construct($text)
    {
        $this->text = $text;
    }

    public function defaultVariables(): array
    {
        return [
            'text' => $this->text
        ];
    }
}