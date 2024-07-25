@props([
    'message',
    'letters'    
])

<div class="justify-center my-12 flex gap-10">
    @foreach(explode(' ', $message) as $word)
        <div class="word">
            @foreach(str_split($word) as $character)
                <span class="material-symbols-outlined character">{{ $letters[strtolower($character)] ?? $character}}</span>
            @endforeach
        </div>
    @endforeach
</div>