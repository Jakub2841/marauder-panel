<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800">
        <flux:sidebar sticky collapsible="mobile" class="border-e border-zinc-200 bg-zinc-50 shadow-lg dark:border-zinc-700 dark:bg-zinc-900 dark:shadow-zinc-900/50">
            <flux:sidebar.header>
                <a href="{{ route('dashboard') }}" wire:navigate class="block w-full">
                    <img src="{{ asset('logo.png') }}" alt="Logo" class="w-full h-auto max-h-32 rounded object-contain">
                </a>
                <flux:sidebar.collapse class="lg:hidden" />
            </flux:sidebar.header>

            <flux:sidebar.nav>
                <flux:separator/>
                <flux:sidebar.group class="grid mt-4 sidebar-nav">
                    <flux:sidebar.item icon="squares-2x2" :href="route('dashboard')" wire:navigate class="data-current:text-blue-400">
                        {{ __('DASHBOARD') }}
                    </flux:sidebar.item>
                    <flux:sidebar.item icon="wifi" :href="route('wifi-scanner')" wire:navigate class="data-current:text-blue-400">
                        {{ __('WIFI SCANNER') }}
                    </flux:sidebar.item>
                    <flux:sidebar.item icon="signal" :href="route('ble-scanner')" wire:navigate class="data-current:text-blue-400">
                        {{ __('BLE SCANNER') }}
                    </flux:sidebar.item>
                    <flux:sidebar.item icon="shield-exclamation" :href="route('wifi-scanner')" wire:navigate class="data-current:text-blue-400">
                        {{ __('ATTACK PANELS') }}
                    </flux:sidebar.item>
                    <flux:sidebar.item icon="cog-6-tooth" :href="route('wifi-scanner')" wire:navigate class="data-current:text-blue-400">
                        {{ __('SETTINGS') }}
                    </flux:sidebar.item>
                    <flux:sidebar.item icon="document-text" :href="route('wifi-scanner')" wire:navigate class="data-current:text-blue-400">
                        {{ __('SYSTEM LOGS') }}
                    </flux:sidebar.item>
                </flux:sidebar.group>
            </flux:sidebar.nav>

            <flux:spacer />

            <x-desktop-user-menu class="hidden lg:block" :name="auth()->user()->name" />
        </flux:sidebar>

        <!-- Mobile User Menu -->
        <flux:header class="lg:hidden">
            <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

            <flux:spacer />

            <flux:dropdown position="top" align="end">
                <flux:profile
                    :initials="auth()->user()->initials()"
                    icon-trailing="chevron-down"
                />

                <flux:menu>
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                <flux:avatar
                                    :name="auth()->user()->name"
                                    :initials="auth()->user()->initials()"
                                />

                                <div class="grid flex-1 text-start text-sm leading-tight">
                                    <flux:heading class="truncate">{{ auth()->user()->name }}</flux:heading>
                                    <flux:text class="truncate">{{ auth()->user()->email }}</flux:text>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('profile.edit')" icon="cog" wire:navigate>
                            {{ __('Settings') }}
                        </flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item
                            as="button"
                            type="submit"
                            icon="arrow-right-start-on-rectangle"
                            class="w-full cursor-pointer"
                            data-test="logout-button"
                        >
                            {{ __('Log out') }}
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
        </flux:header>

        {{ $slot }}

        @persist('toast')
            <flux:toast.group>
                <flux:toast />
            </flux:toast.group>
        @endpersist

        @fluxScripts
    </body>
</html>
