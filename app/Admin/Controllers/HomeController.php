<?php

namespace App\Admin\Controllers;

use Dcat\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->header('Dashboard')
            ->description('Description...');
    }
}
