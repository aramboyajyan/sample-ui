# Development Setup

## Quick Setup for Local Development

1. **Create a fresh Laravel project for testing**:
```bash
composer create-project laravel/laravel ui-test-project
cd ui-test-project
```

2. **Add path repository to composer.json**:
```json
{
    "repositories": [
        {
            "type": "path",
            "url": "../sample-ui",
            "options": {
                "symlink": false
            }
        }
    ],
    "require": {
        "aramboyajyan/sample-ui": "@dev"
    }
}
```

> **Important**: Use `"symlink": false` for Docker environments or if you encounter symlink/path issues. This copies the files instead of creating symbolic links.

3. **Install the local package**:
```bash
composer require aramboyajyan/sample-ui:@dev
```

4. **Publish assets**:
```bash
php artisan vendor:publish --tag=ui-assets
php artisan vendor:publish --tag=ui-config
```

5. **Add CSS to your layout** (`resources/views/layouts/app.blade.php`):
```blade
@ussfStyles
```

## Development Workflow

### Making Changes to Components:

1. **Edit PHP components** in `sample-ui/src/View/Components/`
2. **Edit Blade templates** in `sample-ui/resources/views/components/`
3. **Update the package**: `composer update aramboyajyan/sample-ui` (needed when symlink is disabled)

> **Note**: With `"symlink": false`, you need to run `composer update aramboyajyan/sample-ui` after making changes to see them in your test project.

### Making CSS Changes:

1. **Edit CSS** in `sample-ui/resources/css/ui-components.css`
2. **Rebuild CSS**: `npm run build` (in sample-ui directory)
3. **Update published assets**: `php artisan vendor:publish --tag=ui-assets --force` (in test project)
4. **Refresh browser**

### Quick Test Route:

Add to your test project's `routes/web.php`:
```php
Route::get('/test-ui', function () {
    return view('test-ui');
});
```

Create `resources/views/test-ui.blade.php`:
```blade
@extends('layouts.app')

@section('content')
<div class="ussf-container ussf-mx-auto ussf-p-8">
    <x-ui::h1>Test UI Components</x-ui::h1>
    
    <div class="ussf-space-y-4">
        <x-ui::button type="primary">Primary Button</x-ui::button>
        <x-ui::button type="secondary">Secondary Button</x-ui::button>
        
        <x-ui::p>This is a test paragraph.</x-ui::p>
        
        <x-ui::ul>
            <x-ui::li>Test item 1</x-ui::li>
            <x-ui::li>Test item 2</x-ui::li>
        </x-ui::ul>
    </div>
</div>
@endsection
```

## Troubleshooting

### Common Issues

**"Failed to open stream: No such file or directory"**
- Solution: Use `"symlink": false` in composer.json
- Clear composer cache: `composer clear-cache && rm -rf vendor/ && composer install`

**"Package not found"**
- Check the path in `url` field (should be `"../sample-ui"`)
- Verify the package name matches `composer.json` (`aramboyajyan/sample-ui`)

**Changes not appearing**
- With `"symlink": false`, run `composer update aramboyajyan/sample-ui`
- For CSS changes, also run `php artisan vendor:publish --tag=ui-assets --force`

## Publishing Changes

When you're ready to publish:

1. **Test thoroughly** in your test project
2. **Build production CSS**: `npm run build`
3. **Commit changes** including `dist/ui-components.css`
4. **Tag version**: `git tag v1.1.0`
5. **Push**: `git push origin main --tags`
6. **Update in production projects**: `composer update aramboyajyan/sample-ui`