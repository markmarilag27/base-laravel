<?php

declare(strict_types=1);

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;

class AppPageController extends Controller
{
    public function __invoke(): View|Factory
    {
        return view('pages.app');
    }
}
