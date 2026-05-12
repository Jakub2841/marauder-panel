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
        <flux:table.column></flux:table.column>
    </flux:table.columns>
    <flux:table.row>
        <flux:table.cell>SmartWatch Pro</flux:table.cell>
        <flux:table.cell>Smartwatch</flux:table.cell>
        <flux:table.cell>A1:B2:C3:D4:E5:F6</flux:table.cell>
        <flux:table.cell>
            <flux:checkbox />
        </flux:table.cell>
    </flux:table.row>
    <flux:table.row>
        <flux:table.cell>Fitness Tracker</flux:table.cell>
        <flux:table.cell>Fitness Band</flux:table.cell>
        <flux:table.cell>11:22:33:44:55:66</flux:table.cell>
        <flux:table.cell>
            <flux:checkbox />
        </flux:table.cell>
    </flux:table.row>
</flux:table>
