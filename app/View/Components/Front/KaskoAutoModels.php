<?php

namespace App\View\Components\Front;

use App\Models\KaskoAutoModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class KaskoAutoModels extends Component
{
    public $models;

    /**
     * Create a new component instance.
     */
    public function __construct($brandId)
    {
        $this->models = KaskoAutoModel::where('brand_id', $brandId)->orderByDesc('created_at')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front.kasko-auto-models');
    }
}
