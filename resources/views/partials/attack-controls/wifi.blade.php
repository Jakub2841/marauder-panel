<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">

    {{-- Deauthentication Attack --}}
    <button class="flex items-center gap-4 rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 hover:bg-neutral-100 dark:hover:bg-neutral-700 p-4 text-left transition-colors cursor-pointer group">
        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-blue-500/10 text-blue-500 group-hover:bg-blue-500/20 transition-colors">
            <flux:icon name="no-symbol" class="size-6" />
        </div>
        <div>
            <p class="text-xs font-semibold uppercase tracking-widest text-neutral-400 dark:text-neutral-500">Deauth Attack</p>
            <p class="text-base font-semibold text-neutral-900 dark:text-neutral-100">Deauthentication Attack</p>
        </div>
    </button>

    {{-- Beacon Spam --}}
    <button class="flex items-center gap-4 rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 hover:bg-neutral-100 dark:hover:bg-neutral-700 p-4 text-left transition-colors cursor-pointer group">
        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-blue-500/10 text-blue-500 group-hover:bg-blue-500/20 transition-colors">
            <flux:icon name="signal" class="size-6" />
        </div>
        <div>
            <p class="text-xs font-semibold uppercase tracking-widest text-neutral-400 dark:text-neutral-500">Beacon Spam</p>
            <p class="text-base font-semibold text-neutral-900 dark:text-neutral-100">Beacon Spam Attack</p>
        </div>
    </button>

    {{-- Probe Request Flood --}}
    <button class="flex items-center gap-4 rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 hover:bg-neutral-100 dark:hover:bg-neutral-700 p-4 text-left transition-colors cursor-pointer group">
        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-blue-500/10 text-blue-500 group-hover:bg-blue-500/20 transition-colors">
            <flux:icon name="arrow-path" class="size-6" />
        </div>
        <div>
            <p class="text-xs font-semibold uppercase tracking-widest text-neutral-400 dark:text-neutral-500">Probe Flood</p>
            <p class="text-base font-semibold text-neutral-900 dark:text-neutral-100">Probe Request Flood</p>
        </div>
    </button>

    {{-- Handshake Capture --}}
    <button class="flex items-center gap-4 rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 hover:bg-neutral-100 dark:hover:bg-neutral-700 p-4 text-left transition-colors cursor-pointer group">
        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-blue-500/10 text-blue-500 group-hover:bg-blue-500/20 transition-colors">
            <flux:icon name="lock-closed" class="size-6" />
        </div>
        <div>
            <p class="text-xs font-semibold uppercase tracking-widest text-neutral-400 dark:text-neutral-500">Capture Handshake</p>
            <p class="text-base font-semibold text-neutral-900 dark:text-neutral-100">WPA Handshake Capture</p>
        </div>
    </button>

    {{-- Stop All Attacks --}}
    <button class="flex items-center gap-4 rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-800 hover:bg-neutral-100 dark:hover:bg-neutral-700 p-4 text-left transition-colors cursor-pointer group">
        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-red-500/10 text-red-500 group-hover:bg-red-500/20 transition-colors">
            <flux:icon name="stop-circle" class="size-6" />
        </div>
        <div>
            <p class="text-xs font-semibold uppercase tracking-widest text-neutral-400 dark:text-neutral-500">Stop All</p>
            <p class="text-base font-semibold text-neutral-900 dark:text-neutral-100">Stop All Attacks</p>
        </div>
    </button>

</div>
