<div>
    <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
        <div>
            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
            <div class="mt-1">
                <input type="text" name="message" id="message" wire:model="message" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="message">
            </div>
            <div class="w-full mt-4">
                <p>Result: {{ $result }}</p>
            </div>
            <div class="w-full text-right">
                <button type="submit" wire:click="convert" class="mt-4 ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Convert
                </button>
            </div>
        </div>
    </div>
</div>
