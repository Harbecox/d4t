<?php

namespace App\Http\Controllers;

use App\Admin\Widgets\Card;
use App\Admin\Widgets\EquityCard;
use App\Admin\Widgets\Icon;
use App\Admin\Widgets\InterButton;
use App\Admin\Widgets\InterLabel;
use App\Admin\Widgets\IntermediateCard;
use App\Admin\Widgets\StatusColor;
use App\Admin\Widgets\Steps;
use App\Admin\Widgets\Tool;
use D4T\Admin\Demos\Http\Widgets\AccountDataCard;
use D4T\Admin\Demos\Http\Widgets\BalanceChartWidget;
use D4T\Admin\Demos\Http\Widgets\ProfitTargetChartCard;
use D4T\Admin\Demos\Http\Widgets\TradeHistoryCard;
use D4T\Admin\Demos\Http\Widgets\TradingObjectiveCard;

use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;
use Dcat\Admin\Traits\PreviewCode;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class WidgetNewController extends Controller
{
    use PreviewCode;

    function index(Content $content)
    {
        return $content
            ->header('Widgets')
            ->description('Account Statistics...')
            ->body(function (Row $row){
                $steps = new Steps();
                $steps->addStep("Challenge Account",'You are here')
                ->addStep("Challenge Account",'Next Phase')
                ->activeStep(1);
                $row->column(12,$steps);
            })
            ->body(function (Row $row){
                $inter = new IntermediateCard('Intermediate Instigator');
                $label_1 = new InterLabel("type","Two Step - Phase 1");
                $label_1->tool(new Tool("Some Text"));
                $inter->label($label_1);
                $label_2 = new InterLabel("Platform"," MT4");
                $label_2->tool(new Tool("Some Text"));
                $inter->label($label_2);
                $label_3 = new InterLabel("Starting Balance","$10,000");
                $label_3->tool(new Tool("Some Text"));
                $inter->label($label_3);
                $label_4 = new InterLabel("Status","Active");
                $label_4->statusColor(new StatusColor("linear-gradient(77deg, #3B7321 -1.15%, #7DED49 99.34%)"));
                $inter->label($label_4);

                $inter->buttons(new InterButton("Contact Support",Icon::support->value));
                $inter->buttons(new InterButton("Share Statistics",Icon::share->value));

                $row->column(12,$inter);
            })
            ->body(function (Row $row){
                $eq = new EquityCard("225554","$","INFO TEXT");
                $row->column(4,$eq);
            })
            ->body(function (Row $row) {

                $widgetBalance = new BalanceChartWidget();
                $row->column(9, $widgetBalance);

                $widgetProfitTarget = new ProfitTargetChartCard(3000, 5000);
                $row->column(3, $widgetProfitTarget);
            })
            ->body($this->newline())
            ->body(function (Row $row) {

                $to = new TradingObjectiveCard();
                $row->column(9, $to);

                $accountData = new AccountDataCard();
                $row->column(3, $accountData);
            })
            ->body($this->newline())
            ->body(function (Row $row) {

                $history = new TradeHistoryCard();
                $row->column(12, $history);
            });
    }
}
