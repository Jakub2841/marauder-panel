<div class="flex justify-between items-center mb-4">
    <flux:heading size="lg">Scanned Networks</flux:heading>
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
