<div class="flex flex-col justify-center items-center h-screen bg-background" style="background-image: url('/image/image.png');">
    <div class="pt-6 -ml-40">
        <img src="/image/MagkahiOSA Logo (1).png" alt="Logo" class="h-16 mt-2 absolute -ml-10 -top-1">
        <img src="/image/MagkahiOSA Logo (2).png" alt="Logo text" class="h-48 w-48 absolute -top-14">
    </div>

    <div class="w-screen rounded-md md:w-[35%] md: h-[70%] bg-white my-22  mt-18 shadow-2xl drop-shadow-2xl">
        <p class="ml-20 mt-10 font-semibold text-2xl">Login to your account</p>
        <div class=" px-16 py-10">
            <form wire:submit.prevent="authenticate" class="space-y-8">
                {{ $this->form }}

                <x-filament::button type="submit" form="authenticate" class="w-full">
                    {{ __('filament::login.buttons.submit.label') }}
                </x-filament::button>
            </form>

        </div>
        <div class="leading-3 mt-6">
            <a class="text-[11px] hover:text-border-color ml-20" href="../src/page2.html">Forgot your password?</a>
            <p class="text-[11px] ml-20">Contact your administrator</p>
        </div>
    </div>
</div>
