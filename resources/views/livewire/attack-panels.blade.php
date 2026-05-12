<div>
    {{-- Attack Controls --}}
    <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 p-4">
        <div class="flex justify-between items-center mb-4">
            <flux:heading size="lg">Attack Controls</flux:heading>
            <flux:radio.group variant="segmented" wire:model.live="mode">
                <flux:radio value="wifi">WiFi</flux:radio>
                <flux:radio value="ble">BLE</flux:radio>
            </flux:radio.group>
        </div>
        
        @if($mode === 'wifi')
            @include('partials.attack-controls.wifi')
        @else
            @include('partials.attack-controls.ble')
        @endif
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-4">
        {{-- Scanned Networks / Discovered Devices --}}
        <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 p-4">
            @if($mode === 'wifi')
                @include('partials.scanned-networks.wifi')
            @else
                @include('partials.scanned-networks.ble')
            @endif
        </div>

        {{-- Attack Logs --}}
        <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 p-4">
            @include('partials.attack-logs')
        </div>
    </div>
</div>
