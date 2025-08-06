<?php

namespace Ussf\UiComponents\View\Components;

use Illuminate\View\Component;

class Li extends Component
{
    public function render()
    {
        return view('ui::components.li');
    }

    public function getClasses(): string
    {
        return 'ussf-text-base ussf-text-gray-700';
    }
}