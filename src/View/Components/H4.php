<?php

namespace Ussf\UiComponents\View\Components;

use Illuminate\View\Component;

class H4 extends Component
{
    public function render()
    {
        return view('ui::components.h4');
    }

    public function getClasses(): string
    {
        return 'ussf-text-xl ussf-font-semibold ussf-text-gray-900 ussf-leading-tight';
    }
}