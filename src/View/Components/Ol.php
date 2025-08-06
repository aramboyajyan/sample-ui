<?php

namespace Ussf\UiComponents\View\Components;

use Illuminate\View\Component;

class Ol extends Component
{
  public function render()
  {
    return view('ui::components.ol');
  }

  public function getClasses(): string
  {
    return 'ussf-list-decimal ussf-list-inside ussf-space-y-1 ussf-text-gray-700';
  }
}