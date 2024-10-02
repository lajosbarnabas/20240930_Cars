<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class header extends Component
{
    public function __construct(public $title){}

    public function render(): View|Closure|string
    {
        return view('components.header');
    }
}
