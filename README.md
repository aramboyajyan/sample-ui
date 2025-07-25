# USSF UI Components

A Laravel component library styled with Tailwind CSS for use in corporate projects. This package provides reusable UI components that can be maintained separately and updated across multiple projects.

## Installation

1. Install the package via Composer:
```bash
composer require aramboyajyan/sample-ui
```

2. Publish the configuration file (recommended):
```bash
php artisan vendor:publish --tag=ui-config
```

3. Publish the views (optional):
```bash
php artisan vendor:publish --tag=ui-views
```

4. Publish the CSS assets (optional):
```bash
php artisan vendor:publish --tag=ui-assets
```

5. Include Tailwind CSS in your project and add the package paths to your Tailwind config:
```javascript
module.exports = {
  content: [
    // ... your existing paths
    './vendor/aramboyajyan/sample-ui/resources/views/**/*.blade.php',
  ],
  // ... rest of config
}
```

## Configuration

### Global Font

You can optionally apply a global font to your entire website by configuring the package:

```php
// config/ui-components.php
return [
    'apply_global_font' => true, // Set to true to apply global font
    'font_family' => 'Inter, system-ui, sans-serif', // Customize font stack
];
```

When enabled, the specified font family will be applied to the `body` element.

### USSF Color Palette

The package includes fixed USSF brand colors that extend Tailwind's default palette. These colors are standardized and cannot be customized to ensure brand consistency across all projects:

- **ussf-blue**: Available in shades 100-900 (e.g., `bg-ussf-blue-600`, `text-ussf-blue-500`)
- **ussf-red**: Available in shades 100-900 (e.g., `bg-ussf-red-600`, `text-ussf-red-500`)

```blade
{{-- Using USSF colors --}}
<x-ui::button class="bg-ussf-blue-600 hover:bg-ussf-blue-700">USSF Blue Button</x-ui::button>
<x-ui::typography tag="h1" class="text-ussf-red-700">USSF Red Title</x-ui::typography>
```

**Color Values:**
- **ussf-blue**: Ranges from light blue (#e6f3ff) to dark navy (#002244)
- **ussf-red**: Ranges from light red (#ffe6e6) to dark crimson (#440000)

## Components

### Button Component

The Button component supports different sizes, types, and styling options.

#### Props
- `size`: `sm`, `md` (default), `lg`
- `type`: `primary` (default), `secondary`, `blank`
- `rounded`: `true`, `false` (default)
- `tag`: `button` (default), `a`, `div`, etc.
- `icon`: FontAwesome icon name (without `fa-` prefix)
- `iconPosition`: `left` (default), `right`

#### Usage Examples

```blade
{{-- Basic primary button --}}
<x-ui::button>Click me</x-ui::button>

{{-- Small secondary button --}}
<x-ui::button size="sm" type="secondary">Small Button</x-ui::button>

{{-- Large rounded primary button --}}
<x-ui::button size="lg" :rounded="true">Large Rounded</x-ui::button>

{{-- Blank button with custom attributes --}}
<x-ui::button type="blank" class="w-full" disabled>Disabled Button</x-ui::button>

{{-- Button as link --}}
<x-ui::button tag="a" href="/dashboard" type="primary">Go to Dashboard</x-ui::button>

{{-- Buttons with FontAwesome icons --}}
<x-ui::button icon="save" type="primary">Save Changes</x-ui::button>

{{-- Icon on the right --}}
<x-ui::button icon="arrow-right" iconPosition="right" type="secondary">Next Step</x-ui::button>

{{-- Large button with icon --}}
<x-ui::button size="lg" icon="download" type="primary">Download File</x-ui::button>

{{-- Small button with icon only (use empty content) --}}
<x-ui::button size="sm" icon="edit" type="blank"></x-ui::button>
```

#### FontAwesome Icons

The button component supports FontAwesome icons. Make sure you have FontAwesome included in your project:

```html
<!-- Include FontAwesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
```

Use any FontAwesome icon name without the `fa-` prefix:
- `icon="save"` → `<i class="fas fa-save"></i>`
- `icon="arrow-right"` → `<i class="fas fa-arrow-right"></i>`
- `icon="download"` → `<i class="fas fa-download"></i>`
```

#### Button Types
- **Primary**: Blue background with white text
- **Secondary**: Gray background with dark text
- **Blank**: Transparent background with border

#### Button Sizes
- **sm**: Smaller padding and text
- **md**: Default size
- **lg**: Larger padding and text

### Typography Component

The Typography component provides consistent text styling for headings, paragraphs, and lists.

#### Props
- `tag`: HTML tag to render (`h1`, `h2`, `h3`, `h4`, `h5`, `h6`, `p`, `ul`, `ol`, `li`)
- `variant`: Override the styling variant (defaults to the tag value)

#### Usage Examples

```blade
{{-- Headings --}}
<x-ui::typography tag="h1">Main Page Title</x-ui::typography>
<x-ui::typography tag="h2">Section Title</x-ui::typography>
<x-ui::typography tag="h3">Subsection Title</x-ui::typography>

{{-- Paragraphs --}}
<x-ui::typography tag="p">
    This is a paragraph with proper styling and spacing.
</x-ui::typography>

{{-- Lists --}}
<x-ui::typography tag="ul">
    <x-ui::typography tag="li">First item</x-ui::typography>
    <x-ui::typography tag="li">Second item</x-ui::typography>
    <x-ui::typography tag="li">Third item</x-ui::typography>
</x-ui::typography>

<x-ui::typography tag="ol">
    <x-ui::typography tag="li">First step</x-ui::typography>
    <x-ui::typography tag="li">Second step</x-ui::typography>
    <x-ui::typography tag="li">Third step</x-ui::typography>
</x-ui::typography>

{{-- Custom variant (h2 styling on h3 tag) --}}
<x-ui::typography tag="h3" variant="h2">Large Subtitle</x-ui::typography>
```

#### Typography Styles
- **h1**: 4xl, bold, tight leading
- **h2**: 3xl, bold, tight leading  
- **h3**: 2xl, semibold, tight leading
- **h4**: xl, semibold, tight leading
- **h5**: lg, medium, tight leading
- **h6**: base, medium, tight leading
- **p**: base, relaxed leading
- **ul/ol**: Lists with proper spacing and markers
- **li**: List items with consistent styling

## Development

### Building CSS

1. Install dependencies:
```bash
npm install
```

2. Build for development (with watching):
```bash
npm run dev
```

3. Build for production:
```bash
npm run build
```

### Custom Styling

All components accept additional CSS classes through the standard `class` attribute:

```blade
<x-ui::button class="w-full mt-4">Full Width Button</x-ui::button>
<x-ui::typography tag="h1" class="text-center mb-8">Centered Title</x-ui::typography>
```

### Extending Components

You can extend or customize components by publishing the views and modifying them in your project:

```bash
php artisan vendor:publish --tag=ui-views
```

This will copy the component views to `resources/views/vendor/ui/` where you can customize them.

## License

MIT License