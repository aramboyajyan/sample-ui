<?php

namespace Ussf\UiComponents\View\Components;

use Illuminate\View\Component;

class Ul extends Component
{
  public function render()
  {
    return view('ui::components.ul');
  }

  public function getClasses(): string
  {
    return 'ussf-list-disc ussf-list-inside ussf-space-y-1 ussf-text-gray-700';
  }
}