@props(['letters'])

<div class="flex flex-wrap mt-auto">
    @foreach($letters as $letter => $symbol)
        <div class="flex flex-col item-center border border-black/5 p-2">
            <span class="mb-3 font-bold">{{ strtoupper($letter) }}</span>
            <span class="material-symbols-outlined">{{ $symbol }}</span>
        </div>
    @endforeach
</div>