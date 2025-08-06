<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USSF UI Components Documentation</title>
    @ussfStyles
</head>
<body class="ussf-bg-gray-100 ussf-font-sans">
    <div class="ussf-container ussf-mx-auto ussf-px-4 ussf-py-8">
        <x-ui::typography tag="h1" class="ussf-mb-8 ussf-text-center">USSF UI Components Documentation</x-ui::typography>
        
        <div class="ussf-grid ussf-grid-cols-1 ussf-gap-8 md:ussf-grid-cols-2">
            <!-- Typography Section -->
            <div class="ussf-bg-white ussf-p-6 ussf-rounded-lg ussf-shadow-md">
                <x-ui::h2 class="ussf-mb-4">Typography Components</x-ui::h2>
                
                <div class="ussf-space-y-4">
                    <x-ui::h1>Heading 1</x-ui::h1>
                    <x-ui::h2>Heading 2</x-ui::h2>
                    <x-ui::h3>Heading 3</x-ui::h3>
                    <x-ui::h4>Heading 4</x-ui::h4>
                    <x-ui::h5>Heading 5</x-ui::h5>
                    <x-ui::h6>Heading 6</x-ui::h6>
                    <x-ui::p>This is a paragraph of text that demonstrates the paragraph styling.</x-ui::p>
                    
                    <x-ui::ul>
                        <x-ui::li>Unordered list item 1</x-ui::li>
                        <x-ui::li>Unordered list item 2</x-ui::li>
                        <x-ui::li>Unordered list item 3</x-ui::li>
                    </x-ui::ul>
                    
                    <x-ui::ol>
                        <x-ui::li>Ordered list item 1</x-ui::li>
                        <x-ui::li>Ordered list item 2</x-ui::li>
                        <x-ui::li>Ordered list item 3</x-ui::li>
                    </x-ui::ol>
                </div>
            </div>
            
            <!-- Button Section -->
            <div class="ussf-bg-white ussf-p-6 ussf-rounded-lg ussf-shadow-md">
                <x-ui::h2 class="ussf-mb-4">Button Components</x-ui::h2>
                
                <div class="ussf-space-y-4">
                    <div>
                        <x-ui::p class="ussf-mb-2 ussf-font-semibold">Primary Buttons:</x-ui::p>
                        <div class="ussf-space-x-2">
                            <x-ui::button size="sm">Small</x-ui::button>
                            <x-ui::button>Medium</x-ui::button>
                            <x-ui::button size="lg">Large</x-ui::button>
                        </div>
                    </div>
                    
                    <div>
                        <x-ui::p class="ussf-mb-2 ussf-font-semibold">Secondary Buttons:</x-ui::p>
                        <div class="ussf-space-x-2">
                            <x-ui::button type="secondary" size="sm">Small</x-ui::button>
                            <x-ui::button type="secondary">Medium</x-ui::button>
                            <x-ui::button type="secondary" size="lg">Large</x-ui::button>
                        </div>
                    </div>
                    
                    <div>
                        <x-ui::p class="ussf-mb-2 ussf-font-semibold">Blank Buttons:</x-ui::p>
                        <div class="ussf-space-x-2">
                            <x-ui::button type="blank" size="sm">Small</x-ui::button>
                            <x-ui::button type="blank">Medium</x-ui::button>
                            <x-ui::button type="blank" size="lg">Large</x-ui::button>
                        </div>
                    </div>
                    
                    <div>
                        <x-ui::p class="ussf-mb-2 ussf-font-semibold">Rounded Buttons:</x-ui::p>
                        <div class="ussf-space-x-2">
                            <x-ui::button :rounded="true">Rounded Primary</x-ui::button>
                            <x-ui::button type="secondary" :rounded="true">Rounded Secondary</x-ui::button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Color Palette Section -->
        <div class="ussf-bg-white ussf-p-6 ussf-rounded-lg ussf-shadow-md ussf-mt-8">
            <x-ui::h2 class="ussf-mb-4">USSF Color Palette</x-ui::h2>
            
            <div class="ussf-grid ussf-grid-cols-1 md:ussf-grid-cols-2 ussf-gap-6">
                <div>
                    <x-ui::h3 class="ussf-mb-3">USSF Blue</x-ui::h3>
                    <div class="ussf-grid ussf-grid-cols-3 ussf-gap-2">
                        <div class="ussf-bg-ussf-blue-300 ussf-p-4 ussf-rounded ussf-text-center ussf-text-sm">300</div>
                        <div class="ussf-bg-ussf-blue-500 ussf-p-4 ussf-rounded ussf-text-center ussf-text-sm ussf-text-white">500</div>
                        <div class="ussf-bg-ussf-blue-700 ussf-p-4 ussf-rounded ussf-text-center ussf-text-sm ussf-text-white">700</div>
                    </div>
                </div>
                
                <div>
                    <x-ui::h3 class="ussf-mb-3">USSF Red</x-ui::h3>
                    <div class="ussf-grid ussf-grid-cols-3 ussf-gap-2">
                        <div class="ussf-bg-ussf-red-300 ussf-p-4 ussf-rounded ussf-text-center ussf-text-sm">300</div>
                        <div class="ussf-bg-ussf-red-500 ussf-p-4 ussf-rounded ussf-text-center ussf-text-sm ussf-text-white">500</div>
                        <div class="ussf-bg-ussf-red-700 ussf-p-4 ussf-rounded ussf-text-center ussf-text-sm ussf-text-white">700</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="ussf-text-center ussf-mt-8">
            <x-ui::p class="ussf-text-gray-500">USSF UI Components Library v1.0</x-ui::p>
        </div>
    </div>
</body>
</html>