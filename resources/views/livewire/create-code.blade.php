<div class="text-center mt-12">
    <form action="">
        <textarea wire:model.live="message" cols="50" rows="10" class="bg-black/5 py-2 px-3 rounded"></textarea>
    </form>

    <x-code :message="$message" :letters="$this->letters" />

    <x-legend :letters="$this->letters" />
</div>