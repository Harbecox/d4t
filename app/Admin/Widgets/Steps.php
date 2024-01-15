<?php

namespace App\Admin\Widgets;

use Dcat\Admin\Widgets\Widget;

class Steps extends Widget
{
    protected $view = 'admin.widgets.steps';
    private array $steps = [];
    private int $active = 0;

    public function addStep($name,$title): Steps
    {
        $this->steps[] = [
            'name' => $name,
            'title' => $title,
            'index' => count($this->steps) + 1
        ];
        return $this;
    }

    public function activeStep($index): Steps
    {
        $this->active = $index;
        return $this;
    }

    function render()
    {
        if($this->active == 0 && count($this->steps) > 0){
            $this->active = 1;
        }
        return parent::render();
    }

    public function defaultVariables(): array
    {
        return [
            'active' => $this->active,
            'steps' => $this->steps,
        ];
    }
}