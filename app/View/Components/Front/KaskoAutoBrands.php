<?php

namespace App\View\Components\Front;

use App\Models\KaskoAutoBrand;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class KaskoAutoBrands extends Component
{
    public $brands;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->brands = KaskoAutoBrand::orderByDesc('created_at')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front.kasko-auto-brands');
    }
}
