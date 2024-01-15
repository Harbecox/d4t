<?php

namespace App\Admin\Widgets;

use Dcat\Admin\DcatIcon;
use Dcat\Admin\Widgets\IconWithToolTip;
use Dcat\Admin\Widgets\Widget;

class Equity extends Widget
{
    protected $view = 'admin.widgets.equity-card';

    protected string $equity;
    protected string $symbol;
    protected string|null $tool = null;

    function __construct($equity,$symbol)
    {
        $this->equity = number_format($equity, 2, '.', ',');
        $this->symbol = $symbol;
    }

    function tool($text): Equity
    {
        $tool = new Tool($text);
        $this->tool = $tool->render();
        return $this;
    }

    public function defaultVariables(): array
    {
        return [
            'equity' => $this->equity,
            'symbol' => $this->symbol,
            'tool' => $this->tool,
        ];
    }
}
