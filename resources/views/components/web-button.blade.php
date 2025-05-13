<button type="button" {{ $attributes->merge(["class" => "w-fit active:translate-x-[1px] active:translate-y-[1px] px-8 py-4 focus-visible:outline-dashed focus-within:outline-[.25rem] focus:outline-primary bg-white hover:bg-gray-200 font-inter shadow-[4px_4px_4px_0_rgb(0_0_0_/_0.3)] active:shadow-[inset_2px_2px_2px_0_rgb(0_0_0_/_0.3)] select-none"]) }}>
    {{ $slot }}
</button>