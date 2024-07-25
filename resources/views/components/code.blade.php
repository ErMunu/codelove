@props([
    'message',
    'letters'    
])

<div {{ $attributes->class(['text-center flex flex-wrap gap-7']) }}>
    @foreach(explode(' ', $message) as $word)
        <div class="word flex gap-x-2">
            @foreach(str_split($word) as $character)
            <div>
                <span class="material-symbols-outlined character !text-4xl">{{ $letters[strtolower($character)] ?? $character}}</span>
                <div class="bg-gray-100 border border-black w-12 h-12"></div>
            </div>
            @endforeach
        </div>
    @endforeach
</div>