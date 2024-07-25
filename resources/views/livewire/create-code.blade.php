<div class="text-center mt-12">
    <form action="">
        <textarea wire:model.live="message" cols="50" rows="10" class="bg-black/5 py-2 px-3 rounded"></textarea>
    </form>
    <div class="text-center mt-12 flex gap-10">
        @foreach(explode(' ', $message) as $word)
            <div class="word">
                @foreach(str_split($word) as $character)
                    <span class="material-symbols-outlined character">{{ $this->letters[strtolower($character)] ?? $character}}</span>
                @endforeach
            </div>
        @endforeach
    </div>
</div>