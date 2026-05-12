<x-layouts::app.topnav>
<x-layouts::app :title="__('BLE Scanner')">
    {{-- Scanner Controls --}}
    <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 p-4">
        <flux:heading size="lg" class="mb-4">Scanner Controls</flux:heading>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">

            {{-- Scan BLE Devices --}}
            <button class="flex items-center gap-4 rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 hover:bg-neutral-100 dark:hover:bg-neutral-700 p-4 text-left transition-colors cursor-pointer group">
                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-blue-500/10 text-blue-500 group-hover:bg-blue-500/20 transition-colors">
                    <flux:icon name="signal" class="size-6" />
                </div>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-widest text-neutral-400 dark:text-neutral-500">Scan BLE Devices</p>
                    <p class="text-base font-semibold text-neutral-900 dark:text-neutral-100">Scan BLE Devices</p>
                </div>
            </button>

            {{-- Bluetooth Analyzer --}}
            <button class="flex items-center gap-4 rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 hover:bg-neutral-100 dark:hover:bg-neutral-700 p-4 text-left transition-colors cursor-pointer group">
                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-blue-500/10 text-blue-500 group-hover:bg-blue-500/20 transition-colors">
                    <flux:icon name="signal" class="size-6" />
                </div>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-widest text-neutral-400 dark:text-neutral-500">Bluetooth Analyzer</p>
                    <p class="text-base font-semibold text-neutral-900 dark:text-neutral-100">Bluetooth Analyzer</p>
                </div>
            </button>

            {{-- Sniff BLE Traffic --}}
            <button class="flex items-center gap-4 rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 hover:bg-neutral-100 dark:hover:bg-neutral-700 p-4 text-left transition-colors cursor-pointer group">
                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-blue-500/10 text-blue-500 group-hover:bg-blue-500/20 transition-colors">
                    <flux:icon name="eye" class="size-6" />
                </div>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-widest text-neutral-400 dark:text-neutral-500">Sniff BLE Traffic</p>
                    <p class="text-base font-semibold text-neutral-900 dark:text-neutral-100">Sniff BLE Traffic</p>
                </div>
            </button>

            {{-- Airtag Sniff --}}
            <button class="flex items-center gap-4 rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 hover:bg-neutral-100 dark:hover:bg-neutral-700 p-4 text-left transition-colors cursor-pointer group">
                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-blue-500/10 text-blue-500 group-hover:bg-blue-500/20 transition-colors">
                    <flux:icon name="map-pin" class="size-6" />
                </div>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-widest text-neutral-400 dark:text-neutral-500">Airtag Sniff</p>
                    <p class="text-base font-semibold text-neutral-900 dark:text-neutral-100">Airtag Sniff</p>
                </div>
            </button>

            {{-- Detect Card Skimmers --}}
            <button class="flex items-center gap-4 rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 hover:bg-neutral-100 dark:hover:bg-neutral-700 p-4 text-left transition-colors cursor-pointer group">
                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-blue-500/10 text-blue-500 group-hover:bg-blue-500/20 transition-colors">
                    <flux:icon name="device-phone-mobile" class="size-6" />
                </div>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-widest text-neutral-400 dark:text-neutral-500">Detect Card Skimmers</p>
                    <p class="text-base font-semibold text-neutral-900 dark:text-neutral-100">Detect Card Skimmers</p>
                </div>
            </button>

            {{-- Stop Action --}}
            <button class="flex items-center gap-4 rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 hover:bg-neutral-100 dark:hover:bg-neutral-700 p-4 text-left transition-colors cursor-pointer group">
                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-red-500/10 text-red-500 group-hover:bg-red-500/20 transition-colors">
                    <flux:icon name="stop-circle" class="size-6" />
                </div>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-widest text-neutral-400 dark:text-neutral-500">Stop Action</p>
                    <p class="text-base font-semibold text-neutral-900 dark:text-neutral-100">Stop Action</p>
                </div>
            </button>

        </div>
    </div>

    {{-- BLE Device List --}}
    <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 p-4 mt-4">
        <div class="flex justify-between items-center mb-4">
            <flux:heading size="lg">Discovered Devices</flux:heading>
            <flux:button variant="primary" color="green" size="sm">
                <flux:icon name="server" class="size-4" />
                Save to Database
            </flux:button>
        </div>
        <flux:table>
            <flux:table.columns>
                <flux:table.column>DEVICE NAME</flux:table.column>
                <flux:table.column>
                    <div class="flex items-center gap-1">
                        DEVICE TYPE
                        <flux:tooltip content="This is an assumption the program makes based on generics.">
                            <flux:icon name="information-circle" class="size-4 text-neutral-400" />
                        </flux:tooltip>
                    </div>
                </flux:table.column>
                <flux:table.column>MAC ADDRESS</flux:table.column>
                <flux:table.column>UUID</flux:table.column>
                <flux:table.column>RSSI</flux:table.column>
                <flux:table.column>TX POWER</flux:table.column>
                <flux:table.column>FLAGS</flux:table.column>
                <flux:table.column></flux:table.column>
            </flux:table.columns>
            <flux:table.row>
                <flux:table.cell>SmartWatch Pro</flux:table.cell>
                <flux:table.cell>Smartwatch</flux:table.cell>
                <flux:table.cell>A1:B2:C3:D4:E5:F6</flux:table.cell>
                <flux:table.cell>123e4567-e89b-12d3-a456-426614174000</flux:table.cell>
                <flux:table.cell>
                    <div class="flex items-center gap-2">
                        <flux:icon name="signal" class="size-4 text-green-500" />
                        <span>-45 dBm</span>
                    </div>
                </flux:table.cell>
                <flux:table.cell>4 dBm</flux:table.cell>
                <flux:table.cell>LE General Discoverable</flux:table.cell>
                <flux:table.cell>
                    <flux:checkbox />
                </flux:table.cell>
            </flux:table.row>
            <flux:table.row>
                <flux:table.cell>Fitness Tracker</flux:table.cell>
                <flux:table.cell>Fitness Band</flux:table.cell>
                <flux:table.cell>11:22:33:44:55:66</flux:table.cell>
                <flux:table.cell>987fcdeb-51a2-43d1-b678-901234567890</flux:table.cell>
                <flux:table.cell>
                    <div class="flex items-center gap-2">
                        <flux:icon name="signal" class="size-4 text-yellow-500" />
                        <span>-62 dBm</span>
                    </div>
                </flux:table.cell>
                <flux:table.cell>2 dBm</flux:table.cell>
                <flux:table.cell>LE Limited Discoverable</flux:table.cell>
                <flux:table.cell>
                    <flux:checkbox />
                </flux:table.cell>
            </flux:table.row>
            <flux:table.row>
                <flux:table.cell>Unknown Tracker</flux:table.cell>
                <flux:table.cell>AirTag</flux:table.cell>
                <flux:table.cell>AA:BB:CC:DD:EE:FF</flux:table.cell>
                <flux:table.cell>456e7890-e12b-34d5-a678-901234567890</flux:table.cell>
                <flux:table.cell>
                    <div class="flex items-center gap-2">
                        <flux:icon name="signal" class="size-4 text-red-500" />
                        <span>-78 dBm</span>
                    </div>
                </flux:table.cell>
                <flux:table.cell>0 dBm</flux:table.cell>
                <flux:table.cell>LE General Discoverable</flux:table.cell>
                <flux:table.cell>
                    <flux:checkbox />
                </flux:table.cell>
            </flux:table.row>
            <flux:table.row>
                <flux:table.cell>Living Room TV</flux:table.cell>
                <flux:table.cell>Smart TV</flux:table.cell>
                <flux:table.cell>22:33:44:55:66:77</flux:table.cell>
                <flux:table.cell>789e0123-e45b-67d8-a901-234567890123</flux:table.cell>
                <flux:table.cell>
                    <div class="flex items-center gap-2">
                        <flux:icon name="signal" class="size-4 text-green-500" />
                        <span>-52 dBm</span>
                    </div>
                </flux:table.cell>
                <flux:table.cell>6 dBm</flux:table.cell>
                <flux:table.cell>LE General Discoverable</flux:table.cell>
                <flux:table.cell>
                    <flux:checkbox />
                </flux:table.cell>
            </flux:table.row>
            <flux:table.row>
                <flux:table.cell>Portable Speaker</flux:table.cell>
                <flux:table.cell>Speaker</flux:table.cell>
                <flux:table.cell>88:99:AA:BB:CC:DD</flux:table.cell>
                <flux:table.cell>012e3456-e78b-90d1-a234-567890123456</flux:table.cell>
                <flux:table.cell>
                    <div class="flex items-center gap-2">
                        <flux:icon name="signal" class="size-4 text-yellow-500" />
                        <span>-68 dBm</span>
                    </div>
                </flux:table.cell>
                <flux:table.cell>3 dBm</flux:table.cell>
                <flux:table.cell>LE Limited Discoverable</flux:table.cell>
                <flux:table.cell>
                    <flux:checkbox />
                </flux:table.cell>
            </flux:table.row>
        </flux:table>
    </div>
</x-layouts::app>
</x-layouts::app.topnav>
