<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Catagory;

class CatagoryDropdown extends Component
{
  

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.catagory-dropdown',[
            'catagories'=>Catagory::all(),
            'currentCatagory'=>Catagory::firstWhere('slug',request('catagory'))

        ]);
    }
}
