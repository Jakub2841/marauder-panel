@props([
    'sidebar' => false,
])

@if($sidebar)
    <flux:sidebar.brand {{ $attributes }}>
        <x-slot name="logo">
            <img src="{{ asset('logo.png') }}" alt="Logo" class="w-full h-auto max-h-24 rounded object-cover">
        </x-slot>
    </flux:sidebar.brand>
@else
    <flux:brand {{ $attributes }}>
        <x-slot name="logo">
            <img src="{{ asset('logo.png') }}" alt="Logo" class="size-8 rounded-md">
        </x-slot>
    </flux:brand>
@endif
