<x-layouts::app.topnav>
<x-layouts::app :title="__('Terminal')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">

        <div class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 p-4">
            <div class="flex items-start justify-between mb-4">
                <flux:heading size="lg">Terminal</flux:heading>
            </div>

            <div id="terminal" class="bg-black text-green-400 font-mono text-xs p-3 rounded-lg h-[72vh] overflow-y-auto scrollbar-thin scrollbar-thumb-green-700 scrollbar-track-gray-900" style="scrollbar-width: thin;">
                <div id="terminal-lines">
                    <div class="text-gray-400">This is the direct terminal of the ESP32</div>
                </div>
            </div>

            <form id="command-form" class="mt-4 flex gap-2" onsubmit="return false;">
                <input id="command-input" type="text" placeholder="Type a command and press Enter" class="flex-1 bg-slate-800 text-white font-mono p-3 rounded" />
                <button id="send-btn" class="px-4 py-3 bg-indigo-600 hover:bg-indigo-700 text-white rounded">Send</button>
            </form>
        </div>

    </div>

</x-layouts::app>
</x-layouts::app.topnav>





