<?php

namespace Ussf\UiComponents\View\Components;

use Illuminate\View\Component;

class P extends Component
{
  public function render()
  {
    return view('ui::components.p');
  }

  public function getClasses(): string
  {
    return 'ussf-text-base ussf-text-gray-700 ussf-leading-relaxed ussf-mt-1 ussf-mb-1 test123';
  }
}