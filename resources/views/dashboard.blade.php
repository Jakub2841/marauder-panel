<x-layouts::app.topnav>
<x-layouts::app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">

        {{-- Top row: large main panel + side quick controls --}}
        <div class="grid gap-4 md:grid-cols-4">
            {{-- Access Point List - spans 3 cols --}}
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 md:col-span-3 min-h-96 p-4">
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

            {{-- Quick Controls - spans 1 col --}}
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 md:col-span-1 min-h-96 p-4">
                <flux:heading size="lg" class="mb-4">Quick Controls</flux:heading>
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <flux:icon name="wifi" class="size-5" />
                            <flux:text>WIFI STATUS</flux:text>
                        </div>
                        <flux:button variant="primary" size="sm">ON</flux:button>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <flux:icon name="signal" class="size-5" />
                            <flux:text>BLUETOOTH STATUS</flux:text>
                        </div>
                        <flux:button variant="primary" size="sm">ON</flux:button>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <flux:icon name="shield-exclamation" class="size-5" />
                            <flux:text>ATTACK STATUS</flux:text>
                        </div>
                        <flux:text class="text-green-500">IDLE</flux:text>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <flux:icon name="link" class="size-5" />
                            <flux:text>SERIAL CONNECTION</flux:text>
                        </div>
                        <flux:text class="text-green-500">CONNECTED</flux:text>
                    </div>
                    <flux:separator />
                    <flux:button variant="primary" color="blue" size="sm" class="w-full">
                        <flux:icon name="key" class="size-4" />
                        CAPTURE HANDSHAKE
                    </flux:button>
                    <flux:button variant="primary" color="orange" size="sm" class="w-full">
                        <flux:icon name="exclamation-triangle" class="size-4" />
                        DEAUTH ATTACK
                    </flux:button>
                    <flux:button variant="primary" color="red" size="sm" class="w-full">DISABLE ALL</flux:button>
                </div>
            </div>
        </div>

        {{-- Bottom row: heatmap + network distribution + system log --}}
        <div class="grid gap-4 md:grid-cols-7">
            {{-- Captured handshakes --}}
            <div class="relative min-h-88 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 md:col-span-3 p-4">
                <flux:table>
                    <flux:table.columns>
                        <flux:table.column>ESSID</flux:table.column>
                        <flux:table.column>MAC</flux:table.column>
                        <flux:table.column>Security</flux:table.column>
                        <flux:table.column>Captured on</flux:table.column>
                        <flux:table.column></flux:table.column>
                    </flux:table.columns>
                    <flux:table.row>
                        <flux:table.cell>HomeNetwork_5G</flux:table.cell>
                        <flux:table.cell>A1:B2:C3:D4:E5:F6</flux:table.cell>
                        <flux:table.cell>WPA3</flux:table.cell>
                        <flux:table.cell>2024-04-23 14:32:15</flux:table.cell>
                        <flux:table.cell>
                            <flux:button variant="primary" color="blue" size="sm">
                                <flux:icon name="arrow-down-tray" class="size-4" />
                            </flux:button>
                        </flux:table.cell>
                    </flux:table.row>
                </flux:table>
            </div>

            {{-- Actiity log --}}
            <div class="relative min-h-88 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 md:col-span-3 p-4">
                <flux:heading size="lg" class="mb-4">Activity Log</flux:heading>
                <div class="space-y-3">
                    <div class="flex items-start gap-3 text-sm">
                        <flux:text class="text-gray-500 w-32 shrink-0">14:32:15</flux:text>
                        <flux:text>Handshake captured for HomeNetwork_5G</flux:text>
                    </div>
                </div>
            </div>

            {{-- System Output Log --}}
            <div class="relative min-h-88 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 md:col-span-1 p-4">
                <flux:heading size="lg" class="mb-4">System Output</flux:heading>
                <div class="bg-black text-green-400 font-mono text-xs p-3 rounded-lg h-64 overflow-y-auto scrollbar-thin scrollbar-thumb-green-700 scrollbar-track-gray-900" style="scrollbar-width: thin;">
                    <div class="animate-pulse">_</div>
                </div>
            </div>
        </div>

    </div>
</x-layouts::app>
</x-layouts::app.topnav>
