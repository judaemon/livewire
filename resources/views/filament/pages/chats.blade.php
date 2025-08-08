<x-filament-panels::page>
    <div class="flex h-[calc(100vh-13rem)] border border-red-500 dark:border-gray-700 rounded-lg overflow-hidden">

        {{-- Conversations List --}}
        <div class="w-1/3 bg-gray-50 dark:bg-gray-800 border-r border-gray-200 dark:border-gray-700 flex flex-col">
            <div class="p-2 font-semibold border-b border-gray-200 dark:border-gray-700">
                Conversations
            </div>
            <div class="flex-1 overflow-y-auto">
                @foreach (range(1, 8) as $i)
                    <div
                        class="p-3 border-b border-gray-200 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700 cursor-pointer">
                        <div class="font-medium">User {{ $i }}</div>
                        <div class="text-xs text-gray-500 truncate">Last message preview here...</div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Chat Window --}}
        <div class="flex-1 flex flex-col bg-white dark:bg-gray-900">
            {{-- Chat Header --}}
            <div class="p-3 border-b border-gray-200 dark:border-gray-700 font-semibold">
                Selected Conversation
            </div>

            {{-- Messages --}}
            <div class="flex-1 overflow-y-auto p-3 space-y-3">
                @foreach (range(1, 5) as $i)
                    <div class="flex {{ $i % 2 === 0 ? 'justify-end' : 'justify-start' }}">
                        <div
                            class="px-3 py-2 rounded-lg max-w-xs
                            {{ $i % 2 === 0 ? 'bg-purple-700 text-white' : 'bg-gray-200 dark:bg-gray-700 dark:text-gray-100' }}">
                            Message {{ $i }}
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Input Bar --}}
            <div class="p-3 border-t border-gray-200 dark:border-gray-700 flex gap-2">
                <input type="text" placeholder="Type your message..."
                    class="flex-1 border rounded-lg px-3 py-2 text-sm dark:bg-gray-800 dark:border-gray-600">
                <x-filament::button>
                    Send
                </x-filament::button>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            console.log("test");
        </script>
    @endpush
</x-filament-panels::page>
