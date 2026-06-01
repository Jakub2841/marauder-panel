<x-layouts::app.topnav>
<x-layouts::app :title="__('Settings')">
    <div class="py-8">
        <div class="w-full px-6 lg:px-8">
            <div class="mb-8">
                <flux:heading class="text-2xl">{{ __('Setup') }}</flux:heading>
                <flux:subheading class="text-sm">{{ __('Configure device connection and database (placeholders)') }}</flux:subheading>
            </div>

            {{-- Top row: databases table (left) + COM port (right) --}}
            <div class="grid gap-6 md:grid-cols-5">
                {{-- Databases panel - spans 4 cols to give more space --}}
                <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 md:col-span-4 p-6 min-h-96">
                    <div class="flex items-center justify-between mb-6">
                        <flux:heading size="lg">{{ __('Databases') }}</flux:heading>
                        <div class="flex items-center gap-3">
                            <flux:button variant="outline">{{ __('Change') }}</flux:button>
                            <flux:button variant="primary">{{ __('Create database') }}</flux:button>
                        </div>
                    </div>

                    <flux:table>
                        <flux:table.columns>
                            <flux:table.column class="!w-1/3">{{ __('Name') }}</flux:table.column>
                            <flux:table.column class="!w-1/2">{{ __('Path') }}</flux:table.column>
                            <flux:table.column class="!w-1/6">{{ __('Size') }}</flux:table.column>
                            <flux:table.column></flux:table.column>
                        </flux:table.columns>

                        <flux:table.row>
                            <flux:table.cell>Default DB</flux:table.cell>
                            <flux:table.cell class="text-xs">/database/database.sqlite</flux:table.cell>
                            <flux:table.cell>1.2 MB</flux:table.cell>
                            <flux:table.cell>
                                <div class="flex items-center gap-2 justify-end">
                                    <flux:button variant="outline" size="sm">{{ __('Clear') }}</flux:button>
                                    <flux:button variant="outline" size="sm">{{ __('Change') }}</flux:button>
                                    <flux:button variant="danger" size="sm">{{ __('Delete') }}</flux:button>
                                </div>
                            </flux:table.cell>
                        </flux:table.row>

                        <flux:table.row>
                            <flux:table.cell>Archive DB</flux:table.cell>
                            <flux:table.cell class="text-xs">/database/archive.sqlite</flux:table.cell>
                            <flux:table.cell>8.7 MB</flux:table.cell>
                            <flux:table.cell>
                                <div class="flex items-center gap-2 justify-end">
                                    <flux:button variant="outline" size="sm">{{ __('Clear') }}</flux:button>
                                    <flux:button variant="outline" size="sm">{{ __('Change') }}</flux:button>
                                    <flux:button variant="danger" size="sm">{{ __('Delete') }}</flux:button>
                                </div>
                            </flux:table.cell>
                        </flux:table.row>
                    </flux:table>
                </div>

                {{-- COM port panel - spans 1 col --}}
                <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 md:col-span-1 p-6 min-h-96">
                    <flux:heading size="lg">{{ __('Serial') }}</flux:heading>
                    <div class="mt-6 space-y-4">
                        <flux:label>{{ __('COM port') }}</flux:label>
                        <flux:input :label="__('COM port')" type="text" placeholder="/dev/ttyUSB0 or COM3" />

                        <div class="flex items-center justify-between">
                            <flux:button variant="primary" size="base" class="px-6">{{ __('Connect') }}</flux:button>
                            <div class="flex items-center gap-3">
                                <span class="w-3 h-3 rounded-full bg-red-500" aria-hidden></span>
                                <flux:text>{{ __('Disconnected') }}</flux:text>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts::app>
</x-layouts::app.topnav>





