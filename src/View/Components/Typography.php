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
            'h1' => 'text-4xl font-bold text-gray-900 leading-tight',
            'h2' => 'text-3xl font-bold text-gray-900 leading-tight',
            'h3' => 'text-2xl font-semibold text-gray-900 leading-tight',
            'h4' => 'text-xl font-semibold text-gray-900 leading-tight',
            'h5' => 'text-lg font-medium text-gray-900 leading-tight',
            'h6' => 'text-base font-medium text-gray-900 leading-tight',
            'p' => 'text-base text-gray-700 leading-relaxed',
            'ul' => 'list-disc list-inside space-y-1 text-gray-700',
            'ol' => 'list-decimal list-inside space-y-1 text-gray-700',
            'li' => 'text-base text-gray-700',
            default => 'text-base text-gray-700',
        };
    }
}