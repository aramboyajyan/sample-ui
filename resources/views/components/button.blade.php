<{{ $tag }} {{ $attributes->merge(['class' => $getClasses()]) }}>
    @if($icon && $iconPosition === 'left')
        <i class="fas fa-{{ $icon }} {{ $getIconSize() }} {{ $getIconSpacing() }}"></i>
    @endif
    
    {{ $slot }}
    
    @if($icon && $iconPosition === 'right')
        <i class="fas fa-{{ $icon }} {{ $getIconSize() }} {{ $getIconSpacing() }}"></i>
    @endif
</{{ $tag }}>