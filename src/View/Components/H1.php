<?php

namespace Ussf\UiComponents\View\Components;

use Illuminate\View\Component;

class H1 extends Component
{
  public function render()
  {
    return view('ui::components.h1');
  }

  public function getClasses(): string
  {
    return 'ussf-text-4xl ussf-font-bold ussf-text-gray-900 ussf-leading-tight mb-2 mt-1';
  }
}