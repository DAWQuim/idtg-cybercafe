<div class="w-3/4 sm:w-2/3 flex flex-col-reverse sm:flex-row items-center p-6 gap-6 bg-primary/70 backdrop-blur-xl">
    <div class="w-full sm:w-1/2 flex flex-col gap-2 sm:gap-8">
        <h3 class="w-fit font-khand text-3xl text-black">{{ $areaName }}</h3>
        <x-web-paragraph class="w-fit !text-black">{{ $areaDesc }}</x-web-paragraph>
        <a href="{{ $areaLink }}" draggable="false" class="w-fit">
            <x-web-button class="text-base tracking-widest">
                Saber Mas <img src="{{ asset("images/right-arrow-svgrepo-com.svg") }}" class="h-4 inline fill-black"></img>
            </x-web-button>
        </a>
    </div>
    <div class="w-full sm:w-1/2 h-full">
        {{ $areaPicture }}
    </div>
</div>

