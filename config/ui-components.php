<?php

return [
  /*
  |--------------------------------------------------------------------------
  | Global Font Configuration
  |--------------------------------------------------------------------------
  |
  | Set to true to apply the default font stack globally to the body element.
  | When enabled, the Inter font family will be applied to the entire website.
  | Set to false if you want to manage fonts yourself.
  |
  */
  'apply_global_font' => false,

  /*
  |--------------------------------------------------------------------------
  | Enable documentation route
  |--------------------------------------------------------------------------
  |
  | Set to true to enable the documentation route shipped with the UI library.
  | Not recommended to have enabled in production.
  |
  */
  'enable_documentation_route' => !app()->isProduction(),

  /*
  |--------------------------------------------------------------------------
  | Font Family
  |--------------------------------------------------------------------------
  |
  | The font family to use when global font is enabled.
  | You can customize this to use your preferred font stack.
  |
  */
  'font_family' => 'Inter, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif',
];