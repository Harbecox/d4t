<?php

namespace App\Admin\Widgets;

use Dcat\Admin\DcatIcon;
use Dcat\Admin\Traits\LazyWidget;
use Dcat\Admin\Widgets\IconWithToolTip;
use Dcat\Admin\Widgets\SimpleCard;
use Dcat\Admin\Widgets\Widget;
use Illuminate\Contracts\Support\Renderable;

class Card extends Widget
{
    protected $view = 'admin.widgets.card';
    protected ?string $title = null;
    protected string $content;

    public function __construct()
    {
        static::$css[] = "/css/widgets.css";
        static::$js[] = "/js/widgets.js";
    }

    public function content( $content) : Card
    {
        $this->content = $this->formatRenderable($content);
        return $this;
    }

    public function title(string $title) : Card
    {
        $this->title = $title;
        return $this;
    }

    public function defaultVariables()
    {
        return [
            'title'      => $this->title,
            'content'    => $this->toString($this->content),
            'class' => $this->getHtmlAttribute('class'),
            'style' => $this->getHtmlAttribute('style'),
        ];
    }

}