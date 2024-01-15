<?php

namespace App\Admin\Widgets;

use Dcat\Admin\Widgets\Widget;

class InterLabel extends Widget
{
    protected string $label;
    protected string $value;
    protected string|null $tool = null;
    protected string|null $status_color = null;
    protected $view = "admin.widgets.inter-label";
    function __construct($label,$value)
    {
        $this->label = $label;
        $this->value = $value;
    }

    function tool(Tool $tool): InterLabel
    {
        $this->tool = $tool->render();
        return $this;
    }

    function statusColor(StatusColor $statusColor): InterLabel
    {
        $this->status_color = $statusColor->render();
        return $this;
    }

    public function defaultVariables(): array
    {
        return [
            'label' => $this->label,
            'value' => $this->value,
            'status_color' => $this->status_color,
            'tool' => $this->tool,
        ];
    }
}