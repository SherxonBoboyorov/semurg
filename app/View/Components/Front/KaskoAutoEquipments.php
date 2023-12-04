<?php

namespace App\View\Components\Front;

use App\Models\KaskoAutoEquipment;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class KaskoAutoEquipments extends Component
{
    public $equipments;
    
    /**
     * Create a new component instance.
     */
    public function __construct($modelId)
    {
        $this->equipments = KaskoAutoEquipment::where('model_id', $modelId)->orderByDesc('created_at')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front.kasko-auto-equipments');
    }
}
