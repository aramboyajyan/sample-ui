<?php

namespace Ussf\UiComponents\View\Components;

use Illuminate\View\Component;

class Typography extends Component
{
  public string $tag;
  public string $variant;

  public function __construct(string $tag = 'p', string $variant = '')
  {
    $this->tag = $tag;
    $this->variant = $variant ?: $tag;
  }

  public function render()
  {
    return view('ui::components.typography');
  }

  public function getClasses(): string
  {
    return match ($this->variant) {
      'h1' => 'ussf-text-4xl ussf-font-bold ussf-text-gray-900 ussf-leading-tight',
      'h2' => 'ussf-text-3xl ussf-font-bold ussf-text-gray-900 ussf-leading-tight',
      'h3' => 'ussf-text-2xl ussf-font-semibold ussf-text-gray-900 ussf-leading-tight',
      'h4' => 'ussf-text-xl ussf-font-semibold ussf-text-gray-900 ussf-leading-tight',
      'h5' => 'ussf-text-lg ussf-font-medium ussf-text-gray-900 ussf-leading-tight',
      'h6' => 'ussf-text-base ussf-font-medium ussf-text-gray-900 ussf-leading-tight',
      'p' => 'ussf-text-base ussf-text-gray-700 ussf-leading-relaxed',
      'ul' => 'ussf-list-disc ussf-list-inside ussf-space-y-1 ussf-text-gray-700',
      'ol' => 'ussf-list-decimal ussf-list-inside ussf-space-y-1 ussf-text-gray-700',
      'li' => 'ussf-text-base ussf-text-gray-700',
      default => 'ussf-text-base ussf-text-gray-700',
    };
  }
}