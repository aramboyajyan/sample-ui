<?php

namespace Ussf\UiComponents\View\Components;

use Illuminate\View\Component;

class H5 extends Component
{
    public function render()
    {
        return view('ui::components.h5');
    }

    public function getClasses(): string
    {
        return 'ussf-text-lg ussf-font-medium ussf-text-gray-900 ussf-leading-tight';
    }
}