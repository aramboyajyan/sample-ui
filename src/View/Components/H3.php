<?php

namespace Ussf\UiComponents\View\Components;

use Illuminate\View\Component;

class H3 extends Component
{
    public function render()
    {
        return view('ui::components.h3');
    }

    public function getClasses(): string
    {
        return 'ussf-text-2xl ussf-font-semibold ussf-text-gray-900 ussf-leading-tight';
    }
}