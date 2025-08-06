<?php

namespace Ussf\UiComponents\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
  public string $size;
  public string $type;
  public bool $rounded;
  public string $tag;
  public ?string $icon;
  public string $iconPosition;

  public function __construct(
    string $size = 'md',
    string $type = 'primary',
    bool $rounded = false,
    string $tag = 'button',
    ?string $icon = null,
    string $iconPosition = 'left'
  ) {
    $this->size = $size;
    $this->type = $type;
    $this->rounded = $rounded;
    $this->tag = $tag;
    $this->icon = $icon;
    $this->iconPosition = $iconPosition;
  }

  public function render()
  {
    return view('ui::components.button');
  }

  public function getSizeClasses(): string
  {
    return match ($this->size) {
      'sm' => 'ussf-px-3 ussf-py-1.5 ussf-text-sm',
      'lg' => 'ussf-px-6 ussf-py-3 ussf-text-lg',
      default => 'ussf-px-4 ussf-py-2 ussf-text-base',
    };
  }

  public function getIconSize(): string
  {
    return match ($this->size) {
      'sm' => 'ussf-text-sm',
      'lg' => 'ussf-text-lg',
      default => 'ussf-text-base',
    };
  }

  public function getIconSpacing(): string
  {
    if (!$this->icon) {
      return '';
    }

    return match ($this->iconPosition) {
      'right' => 'ussf-ml-2',
      default => 'ussf-mr-2',
    };
  }

  public function getTypeClasses(): string
  {
    return match ($this->type) {
      'primary' => 'ussf-bg-blue-600 hover:ussf-bg-blue-700 ussf-text-white ussf-border-transparent',
      'secondary' => 'ussf-bg-gray-200 hover:ussf-bg-gray-300 ussf-text-gray-900 ussf-border-transparent',
      default => 'ussf-bg-transparent hover:ussf-bg-gray-100 ussf-text-gray-700 ussf-border-gray-300',
    };
  }

  public function getRoundedClasses(): string
  {
    return $this->rounded ? 'ussf-rounded-full' : 'ussf-rounded-md';
  }

  public function getClasses(): string
  {
    $baseClasses = 'ussf-inline-flex ussf-items-center ussf-justify-center ussf-font-medium ussf-border ussf-transition-colors ussf-duration-200 focus:ussf-outline-none focus:ussf-ring-2 focus:ussf-ring-blue-500 focus:ussf-ring-offset-2 disabled:ussf-opacity-50 disabled:ussf-cursor-not-allowed';

    return implode(' ', [
      $baseClasses,
      $this->getSizeClasses(),
      $this->getTypeClasses(),
      $this->getRoundedClasses(),
    ]);
  }
}