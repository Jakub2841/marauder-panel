<x-layouts::app.topnav>
<x-layouts::app :title="__('WiFi Scanner')">
    {{-- Scanner Controls --}}
    <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 p-4">
        <flux:heading size="lg" class="mb-4">Scanner Controls</flux:heading>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">

            {{-- Scan Access Points --}}
            <button class="flex items-center gap-4 rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 hover:bg-neutral-100 dark:hover:bg-neutral-700 p-4 text-left transition-colors cursor-pointer group">
                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-blue-500/10 text-blue-500 group-hover:bg-blue-500/20 transition-colors">
                    <flux:icon name="wifi" class="size-6" />
                </div>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-widest text-neutral-400 dark:text-neutral-500">Scan Access Points</p>
                    <p class="text-base font-semibold text-neutral-900 dark:text-neutral-100">Scan Access Points</p>
                </div>
            </button>

            {{-- Scan Stations --}}
            <button class="flex items-center gap-4 rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 hover:bg-neutral-100 dark:hover:bg-neutral-700 p-4 text-left transition-colors cursor-pointer group">
                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-blue-500/10 text-blue-500 group-hover:bg-blue-500/20 transition-colors">
                    <flux:icon name="user-group" class="size-6" />
                </div>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-widest text-neutral-400 dark:text-neutral-500">Scan Stations</p>
                    <p class="text-base font-semibold text-neutral-900 dark:text-neutral-100">Scan Stations</p>
                </div>
            </button>

            {{-- Sniff Beacon --}}
            <button class="flex items-center gap-4 rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 hover:bg-neutral-100 dark:hover:bg-neutral-700 p-4 text-left transition-colors cursor-pointer group">
                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-blue-500/10 text-blue-500 group-hover:bg-blue-500/20 transition-colors">
                    <flux:icon name="signal" class="size-6" />
                </div>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-widest text-neutral-400 dark:text-neutral-500">Sniff Beacon</p>
                    <p class="text-base font-semibold text-neutral-900 dark:text-neutral-100">Sniff Beacon</p>
                </div>
            </button>

            {{-- Sniff Deauth --}}
            <button class="flex items-center gap-4 rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 hover:bg-neutral-100 dark:hover:bg-neutral-700 p-4 text-left transition-colors cursor-pointer group">
                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-blue-500/10 text-blue-500 group-hover:bg-blue-500/20 transition-colors">
                    <flux:icon name="no-symbol" class="size-6" />
                </div>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-widest text-neutral-400 dark:text-neutral-500">Sniff Deauth</p>
                    <p class="text-base font-semibold text-neutral-900 dark:text-neutral-100">Sniff Deauth</p>
                </div>
            </button>

            {{-- Capture Handshake --}}
            <button class="flex items-center gap-4 rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 hover:bg-neutral-100 dark:hover:bg-neutral-700 p-4 text-left transition-colors cursor-pointer group">
                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-blue-500/10 text-blue-500 group-hover:bg-blue-500/20 transition-colors">
                    <flux:icon name="lock-closed" class="size-6" />
                </div>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-widest text-neutral-400 dark:text-neutral-500">Capture Handshake</p>
                    <p class="text-base font-semibold text-neutral-900 dark:text-neutral-100">Capture Handshake</p>
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

    {{-- Access Point List --}}
    <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 p-4 mt-4">
        <div class="flex justify-between items-center mb-4">
            <flux:heading size="lg">Available Networks</flux:heading>
            <flux:button variant="primary" color="green" size="sm">
                <flux:icon name="server" class="size-4" />
                Save to Database
            </flux:button>
        </div>
        <flux:table>
            <flux:table.columns>
                <flux:table.column>ESSID</flux:table.column>
                <flux:table.column>MAC</flux:table.column>
                <flux:table.column>CHANNEL</flux:table.column>
                <flux:table.column>SECURITY</flux:table.column>
                <flux:table.column>SIGNAL</flux:table.column>
                <flux:table.column>CLIENTS</flux:table.column>
                <flux:table.column></flux:table.column>
            </flux:table.columns>
            <flux:table.row>
                <flux:table.cell>HomeNetwork_5G</flux:table.cell>
                <flux:table.cell>A1:B2:C3:D4:E5:F6</flux:table.cell>
                <flux:table.cell>6</flux:table.cell>
                <flux:table.cell>WPA3</flux:table.cell>
                <flux:table.cell>
                    <div class="flex items-center gap-2">
                        <flux:icon name="wifi" class="size-4 text-green-500" />
                        <span>-45 dBm</span>
                    </div>
                </flux:table.cell>
                <flux:table.cell>3</flux:table.cell>
                <flux:table.cell>
                    <flux:checkbox />
                </flux:table.cell>
            </flux:table.row>
            <flux:table.row>
                <flux:table.cell>Guest_WiFi</flux:table.cell>
                <flux:table.cell>11:22:33:44:55:66</flux:table.cell>
                <flux:table.cell>11</flux:table.cell>
                <flux:table.cell>WPA2</flux:table.cell>
                <flux:table.cell>
                    <div class="flex items-center gap-2">
                        <flux:icon name="wifi" class="size-4 text-yellow-500" />
                        <span>-62 dBm</span>
                    </div>
                </flux:table.cell>
                <flux:table.cell>1</flux:table.cell>
                <flux:table.cell>
                    <flux:checkbox />
                </flux:table.cell>
            </flux:table.row>
        </flux:table>
    </div>
</x-layouts::app>
</x-layouts::app.topnav>
