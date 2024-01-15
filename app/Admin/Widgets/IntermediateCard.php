<?php

namespace App\Admin\Widgets;

use Dcat\Admin\Widgets\Widget;

class IntermediateCard extends Widget
{
    protected string $title;
    protected $view = 'admin.widgets.intermediate-card';
    protected array $labels = [];
    protected array $buttons = [];
    function __construct($title)
    {
        $this->title = $title;
    }

    public function defaultVariables(): array
    {
        return [
            'title' => $this->title,
            'tool' => $this->tool,
            'status_color' => $this->status_color,
            'labels' => $this->labels,
            'buttons' => $this->buttons
        ];
    }

    function label(InterLabel $label): IntermediateCard
    {
        $this->labels[] = $label->render();
        return $this;
    }

    function buttons(InterButton $interButton): IntermediateCard
    {
        $this->buttons[] = $interButton->render();
        return $this;
    }

    function render()
    {
        $content = parent::render();
        $card = new Card();
        $card->content($content);
        return $card->render();
    }

}