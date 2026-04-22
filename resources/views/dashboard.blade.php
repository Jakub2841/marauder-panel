<x-layouts::app.topnav>
<x-layouts::app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">

        {{-- Top row: large main panel + side quick controls --}}
        <div class="grid gap-4 md:grid-cols-4">
            {{-- Access Point List - spans 3 cols --}}
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 md:col-span-3 min-h-96">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>

            {{-- Quick Controls - spans 1 col --}}
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 md:col-span-1 min-h-96">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div>

        {{-- Bottom row: heatmap + network distribution + system log --}}
        <div class="grid gap-4 md:grid-cols-7">
            {{-- Signal Strength Heatmap --}}
            <div class="relative min-h-88 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 md:col-span-3">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>

            {{-- Network Type Distribution --}}
            <div class="relative min-h-88 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 md:col-span-3">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>

            {{-- System Output Log --}}
            <div class="relative min-h-88 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 md:col-span-1">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div>

    </div>
</x-layouts::app>
</x-layouts::app.topnav>
