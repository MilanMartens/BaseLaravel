{{--<x-layouts.vinylshop :title="$title ?? null">
    {{ $slot }}
</x-layouts.vinylshop>--}}

<x-layouts.app.sidebar :title="$title ?? null">
    <flux:main>
        {{ $slot }}
    </flux:main>
</x-layouts.app.sidebar>
