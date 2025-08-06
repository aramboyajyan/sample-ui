<?php

namespace Ussf\UiComponents\View\Components;

use Illuminate\View\Component;

class H6 extends Component
{
  public function render()
  {
    return view('ui::components.h6');
  }

  public function getClasses(): string
  {
    return 'ussf-text-base ussf-font-medium ussf-text-gray-900 ussf-leading-tight ussf-mb-1 ussf-mt-1';
  }
}