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
            'sm' => 'px-3 py-1.5 text-sm',
            'lg' => 'px-6 py-3 text-lg',
            default => 'px-4 py-2 text-base',
        };
    }

    public function getIconSize(): string
    {
        return match ($this->size) {
            'sm' => 'text-sm',
            'lg' => 'text-lg',
            default => 'text-base',
        };
    }

    public function getIconSpacing(): string
    {
        if (!$this->icon) {
            return '';
        }
        
        return match ($this->iconPosition) {
            'right' => 'ml-2',
            default => 'mr-2',
        };
    }

    public function getTypeClasses(): string
    {
        return match ($this->type) {
            'primary' => 'bg-blue-600 hover:bg-blue-700 text-white border-transparent',
            'secondary' => 'bg-gray-200 hover:bg-gray-300 text-gray-900 border-transparent',
            'blank' => 'bg-transparent hover:bg-gray-100 text-gray-700 border-gray-300',
            default => 'bg-blue-600 hover:bg-blue-700 text-white border-transparent',
        };
    }

    public function getRoundedClasses(): string
    {
        return $this->rounded ? 'rounded-full' : 'rounded-md';
    }

    public function getClasses(): string
    {
        $baseClasses = 'inline-flex items-center justify-center font-medium border transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed';
        
        return implode(' ', [
            $baseClasses,
            $this->getSizeClasses(),
            $this->getTypeClasses(),
            $this->getRoundedClasses(),
        ]);
    }
}