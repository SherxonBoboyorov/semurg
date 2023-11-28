<?php

namespace App\View\Components\Front;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class KaskoAutoYears extends Component
{
    public $years;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->years = range(date('Y'), date('Y') - 4);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front.kasko-auto-years');
    }
}
