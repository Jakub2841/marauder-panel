<div>
    <div class="flex justify-between items-center mb-4">
        <flux:heading size="lg">Attack Logs</flux:heading>
        <flux:button variant="ghost" size="sm">
            <flux:icon name="trash" class="size-4" />
            Clear Logs
        </flux:button>
    </div>
    <flux:table>
        <flux:table.columns>
            <flux:table.column>ATTACK TYPE</flux:table.column>
            <flux:table.column>TARGET</flux:table.column>
            <flux:table.column>DATE</flux:table.column>
            <flux:table.column>DURATION</flux:table.column>
        </flux:table.columns>
        <flux:table.row>
            <flux:table.cell>
                <div class="flex items-center gap-2">
                    <flux:icon name="no-symbol" class="size-4 text-red-500" />
                    <span>Deauth Attack</span>
                </div>
            </flux:table.cell>
            <flux:table.cell>A1:B2:C3:D4:E5:F6</flux:table.cell>
            <flux:table.cell>2026-05-12 14:32:15</flux:table.cell>
            <flux:table.cell>00:03:24</flux:table.cell>
        </flux:table.row>
        <flux:table.row>
            <flux:table.cell>
                <div class="flex items-center gap-2">
                    <flux:icon name="signal" class="size-4 text-yellow-500" />
                    <span>Beacon Spam</span>
                </div>
            </flux:table.cell>
            <flux:table.cell>Multiple SSIDs</flux:table.cell>
            <flux:table.cell>2026-05-12 13:15:42</flux:table.cell>
            <flux:table.cell>00:05:12</flux:table.cell>
        </flux:table.row>
        <flux:table.row>
            <flux:table.cell>
                <div class="flex items-center gap-2">
                    <flux:icon name="lock-closed" class="size-4 text-blue-500" />
                    <span>Handshake Capture</span>
                </div>
            </flux:table.cell>
            <flux:table.cell>HomeNetwork_5G</flux:table.cell>
            <flux:table.cell>2026-05-12 12:08:33</flux:table.cell>
            <flux:table.cell>00:01:45</flux:table.cell>
        </flux:table.row>
        <flux:table.row>
            <flux:table.cell>
                <div class="flex items-center gap-2">
                    <flux:icon name="arrow-path" class="size-4 text-purple-500" />
                    <span>Probe Flood</span>
                </div>
            </flux:table.cell>
            <flux:table.cell>22:33:44:55:66:77</flux:table.cell>
            <flux:table.cell>2026-05-11 18:45:20</flux:table.cell>
            <flux:table.cell>00:02:18</flux:table.cell>
        </flux:table.row>
    </flux:table>
</div>
