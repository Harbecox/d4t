<?php

namespace App\Admin\Widgets;

use Dcat\Admin\Widgets\Widget;

class EquityCard extends Widget
{

    protected string $content = "";

    function __construct($equity,$symbol,$tool = null){
        $eq = new Equity($equity,$symbol);
        $eq->tool($tool);
        $card = new Card();
        $card->content($eq->render());
        $this->content = $card->render();
    }

    function render()
    {
        return $this->content;
    }

    public function defaultVariables(): array
    {
        return [
            'equity' => $this->equity,
            'content' => $this->content,
            'class' => $this->getHtmlAttribute('class'),
            'style' => $this->getHtmlAttribute('style'),
        ];
    }
}