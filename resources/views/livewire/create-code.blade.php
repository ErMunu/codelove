<div class="my-8 flex flex-col items-center gap-10 flex-1">
    <form class="print:hidden w-full">
        <textarea wire:model.live="message" cols="50" rows="10" class="bg-black/5 py-2 px-3 rounded-xl w-full"></textarea>

        <div class="mt-2 flex justify-end">
            <button type="button" @disabled(!$message) @click="window.print()" class="bg-blue-500 text-white px-4 py-1 text-sm font-semibold rounded-md disabled:bg-gray-500">Print</button>
        </div>
    </form>

    <x-code :message="$message" :letters="$this->letters" />

    @if ($message)
        <x-legend :letters="$this->letters" />
    @endif
</div>