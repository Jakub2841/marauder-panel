<?php

use Livewire\Component;
use Livewire\Attributes\Title;

new #[Title('Setup')] class extends Component {
    public string $comPort = '';
    public string $apiIp = '';
    public string $apiStatus = 'disconnected'; // disconnected, connecting, connected, failed
    public string $comStatus = 'disconnected'; // disconnected, connecting, connected, failed
    public array $databases = [
        ['id' => 1, 'name' => 'marauder_main', 'records' => '1,234', 'created' => '2024-01-15'],
        ['id' => 2, 'name' => 'marauder_backup', 'records' => '567', 'created' => '2024-03-22'],
    ];
    public ?int $editingDatabaseId = null;
    public string $editingName = '';
    public ?int $selectedDatabaseId = null;
    public ?int $deletingDatabaseId = null;
    public ?int $clearingDatabaseId = null;

    public function mount(): void
    {
        $this->comPort = '';
        $this->apiIp = '';
        $this->apiStatus = 'disconnected';
        $this->comStatus = 'disconnected';
    }

    public function connectApi(): void
    {
        $this->apiStatus = 'connecting';
        // Placeholder: Will implement actual connection logic later
        $this->apiStatus = 'connected';
    }

    public function disconnectApi(): void
    {
        $this->apiStatus = 'disconnected';
    }

    public function connectCom(): void
    {
        $this->comStatus = 'connecting';
        // Placeholder: Will implement actual connection logic later
        $this->comStatus = 'connected';
    }

    public function disconnectCom(): void
    {
        $this->comStatus = 'disconnected';
    }

    public function startEditing(int $id): void
    {
        $this->editingDatabaseId = $id;
        $database = collect($this->databases)->firstWhere('id', $id);
        $this->editingName = $database['name'] ?? '';
    }

    public function saveName(): void
    {
        if ($this->editingDatabaseId) {
            foreach ($this->databases as &$database) {
                if ($database['id'] === $this->editingDatabaseId) {
                    $database['name'] = $this->editingName;
                    break;
                }
            }
            $this->editingDatabaseId = null;
            $this->editingName = '';
        }
    }

    public function cancelEditing(): void
    {
        $this->editingDatabaseId = null;
        $this->editingName = '';
    }

    public function selectDatabase(int $id): void
    {
        $this->selectedDatabaseId = $id;
    }

    public function confirmDelete(int $id): void
    {
        $this->deletingDatabaseId = $id;
    }

    public function deleteDatabase(): void
    {
        if ($this->deletingDatabaseId) {
            $this->databases = array_filter($this->databases, function($db) {
                return $db['id'] !== $this->deletingDatabaseId;
            });
            $this->databases = array_values($this->databases);
            if ($this->selectedDatabaseId === $this->deletingDatabaseId) {
                $this->selectedDatabaseId = null;
            }
            $this->deletingDatabaseId = null;
        }
    }

    public function cancelDelete(): void
    {
        $this->deletingDatabaseId = null;
    }

    public function confirmClear(int $id): void
    {
        $this->clearingDatabaseId = $id;
    }

    public function clearDatabase(): void
    {
        if ($this->clearingDatabaseId) {
            foreach ($this->databases as &$database) {
                if ($database['id'] === $this->clearingDatabaseId) {
                    $database['records'] = '0';
                    break;
                }
            }
            $this->clearingDatabaseId = null;
        }
    }

    public function cancelClear(): void
    {
        $this->clearingDatabaseId = null;
    }

    public function createDatabase(): void
    {
        $newId = count($this->databases) > 0 ? max(array_column($this->databases, 'id')) + 1 : 1;
        $this->databases[] = [
            'id' => $newId,
            'name' => 'new_database',
            'records' => '0',
            'created' => date('Y-m-d'),
        ];
        $this->startEditing($newId);
    }
}; ?>

<section class="w-full">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="mb-2">
            <flux:heading size="lg">{{ __('Setup') }}</flux:heading>
            <flux:subheading>{{ __('Configure device connection and manage databases') }}</flux:subheading>
        </div>

        {{-- Top row: Database table + COM port controls --}}
        <div class="grid gap-4 md:grid-cols-4">
            {{-- Database Management Table - spans 3 cols --}}
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 md:col-span-3 min-h-96 p-4">
                <flux:heading size="lg" class="mb-4">Databases</flux:heading>
                <flux:table>
                    <flux:table.columns>
                        <flux:table.column>Database Name</flux:table.column>
                        <flux:table.column></flux:table.column>
                        <flux:table.column>Records</flux:table.column>
                        <flux:table.column>Created</flux:table.column>
                        <flux:table.column>Actions</flux:table.column>
                    </flux:table.columns>
                    @foreach($databases as $database)
                        <flux:table.row :class="$selectedDatabaseId === $database['id'] ? 'bg-blue-50 dark:bg-blue-900/20' : ''">
                            <flux:table.cell>
                                @if($editingDatabaseId === $database['id'])
                                    <input
                                        type="text"
                                        wire:model="editingName"
                                        class="bg-transparent border-b border-blue-500 focus:outline-none focus:border-blue-600 text-sm px-1 py-0.5 w-40"
                                        autofocus
                                        x-on:keydown.enter="saveName"
                                        x-on:keydown.escape="cancelEditing"
                                    />
                                @else
                                    <span class="text-sm">{{ $database['name'] }}</span>
                                @endif
                            </flux:table.cell>
                            <flux:table.cell>
                                @if($editingDatabaseId === $database['id'])
                                    <div class="flex items-center gap-1">
                                        <flux:button variant="ghost" size="sm" wire:click="saveName" color="green">
                                            <flux:icon name="check" class="size-4" />
                                        </flux:button>
                                        <flux:button variant="ghost" size="sm" wire:click="cancelEditing" color="red">
                                            <flux:icon name="x-mark" class="size-4" />
                                        </flux:button>
                                    </div>
                                @else
                                    <flux:button variant="ghost" size="sm" wire:click="startEditing({{ $database['id'] }})">
                                        <flux:icon name="pencil-square" class="size-4 text-gray-500" />
                                    </flux:button>
                                @endif
                            </flux:table.cell>
                            <flux:table.cell>{{ $database['records'] }}</flux:table.cell>
                            <flux:table.cell>{{ $database['created'] }}</flux:table.cell>
                            <flux:table.cell>
                                <div class="flex gap-2">
                                    <flux:button variant="outline" size="sm" wire:click="confirmClear({{ $database['id'] }})">Clear</flux:button>
                                    <flux:button variant="{{ $selectedDatabaseId === $database['id'] ? 'primary' : 'outline' }}" size="sm" wire:click="selectDatabase({{ $database['id'] }})">
                                        @if($selectedDatabaseId === $database['id'])
                                            <flux:icon name="check-circle" class="size-4" />
                                        @endif
                                        Select
                                    </flux:button>
                                    <flux:button variant="outline" size="sm">Backup</flux:button>
                                    <flux:button variant="danger" size="sm" wire:click="confirmDelete({{ $database['id'] }})">Delete</flux:button>
                                </div>
                            </flux:table.cell>
                        </flux:table.row>
                    @endforeach
                </flux:table>

                <flux:separator class="my-4" />

                <flux:button variant="primary" color="green" size="sm" wire:click="createDatabase">
                    Create Database
                </flux:button>
            </div>

            {{-- COM Port Connection - spans 1 col --}}
            <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 md:col-span-1 min-h-96 p-4">
                <flux:heading size="lg" class="mb-4">Connection</flux:heading>
                <div class="space-y-4">
                    <div>
                        <flux:label>IP:Port</flux:label>
                        <flux:input
                            wire:model.defer="apiIp"
                            placeholder="192.168.1.100:3000"
                        />
                    </div>

                    <div>
                        <flux:label>COM Port</flux:label>
                        <flux:input
                            wire:model.defer="comPort"
                            placeholder="/dev/ttyUSB0 or COM3"
                        />
                    </div>

                    <flux:separator />

                    {{-- API Status --}}
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center gap-2">
                                <flux:icon name="computer-desktop" class="size-5" />
                                <flux:text>API</flux:text>
                            </div>
                            @if($apiStatus === 'connected')
                                <flux:text class="text-green-500 font-semibold">Connected</flux:text>
                            @elseif($apiStatus === 'connecting')
                                <flux:text class="text-yellow-500 font-semibold">Connecting...</flux:text>
                            @elseif($apiStatus === 'failed')
                                <flux:text class="text-red-500 font-semibold">Failed</flux:text>
                            @else
                                <flux:text class="text-gray-500">Disconnected</flux:text>
                            @endif
                        </div>
                        @if($apiStatus === 'connected')
                            <flux:button variant="outline" color="red" class="w-full" wire:click="disconnectApi">
                                Disconnect
                            </flux:button>
                        @else
                            <flux:button variant="primary" color="green" class="w-full" wire:click="connectApi">
                                Connect
                            </flux:button>
                        @endif
                    </div>

                    <flux:separator />

                    {{-- COM Port Status --}}
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center gap-2">
                                <flux:icon name="link" class="size-5" />
                                <flux:text>COM Port</flux:text>
                            </div>
                            @if($comStatus === 'connected')
                                <flux:text class="text-green-500 font-semibold">Connected</flux:text>
                            @elseif($comStatus === 'connecting')
                                <flux:text class="text-yellow-500 font-semibold">Connecting...</flux:text>
                            @elseif($comStatus === 'failed')
                                <flux:text class="text-red-500 font-semibold">Failed</flux:text>
                            @else
                                <flux:text class="text-gray-500">Disconnected</flux:text>
                            @endif
                        </div>
                        @if($comStatus === 'connected')
                            <flux:button variant="outline" color="red" class="w-full" wire:click="disconnectCom">
                                Disconnect
                            </flux:button>
                        @else
                            <flux:button variant="primary" color="green" class="w-full" wire:click="connectCom">
                                Connect
                            </flux:button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Delete Confirmation Modal --}}
    @if($deletingDatabaseId)
        <flux:modal wire:model="deletingDatabaseId" class="min-w-[22rem]">
            <div class="space-y-6">
                <div>
                    <flux:heading size="lg">Delete Database</flux:heading>
                    <flux:text class="mt-2">
                        Are you sure you want to delete this database? This action cannot be undone.
                    </flux:text>
                </div>

                <div class="flex gap-2 justify-end">
                    <flux:button variant="filled" wire:click="cancelDelete">Cancel</flux:button>
                    <flux:button variant="danger" wire:click="deleteDatabase">Delete</flux:button>
                </div>
            </div>
        </flux:modal>
    @endif

    {{-- Clear Confirmation Modal --}}
    @if($clearingDatabaseId)
        <flux:modal wire:model="clearingDatabaseId" class="min-w-[22rem]">
            <div class="space-y-6">
                <div>
                    <flux:heading size="lg">Clear Database</flux:heading>
                    <flux:text class="mt-2">
                        Are you sure you want to clear all records from this database?
                    </flux:text>
                </div>

                <div class="flex gap-2 justify-end">
                    <flux:button variant="filled" wire:click="cancelClear">Cancel</flux:button>
                    <flux:button variant="danger" wire:click="clearDatabase">Clear</flux:button>
                </div>
            </div>
        </flux:modal>
    @endif
</section>




