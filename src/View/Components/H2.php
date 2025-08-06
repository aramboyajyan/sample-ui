<?php

namespace Ussf\UiComponents\View\Components;

use Illuminate\View\Component;

class H2 extends Component
{
  public function render()
  {
    return view('ui::components.h2');
  }

  public function getClasses(): string
  {
    return 'ussf-text-3xl ussf-font-bold ussf-text-gray-900 ussf-leading-tight ussf-mb-4 ussf-mt-1';
  }
}