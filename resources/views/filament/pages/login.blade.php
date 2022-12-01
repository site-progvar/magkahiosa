<div class="absolute overflow-hidden h-screen w-screen m-0 flex flex-col justify-items-center" style="background-image: url('/image/image.png');">

    {{-- water mark --}}
    <code class="sm:text-xs z-40 absolute bottom-0 right-0 p-[10px] login-color login-font-size">
        &#169; USTP - SITE Programmer's Varsity 2022
    </code>


    {{-- screen for forgot password --}}
    <div class="forgotPage opacity-0 z-20 absolute h-screen w-screen flex flex-col items-center justify-center ">
        <div class=" min-w-[578px] min-h-[474px] duration-500 ease-in-out bg-white rounded-[10px] flex flex-col items-center form-container
                            sm:min-w-[364px] sm:min-h-[350px] sm:mx-[200px]">
            <form class="mt-[14%] flex items-start flex-col w-[75%] flex-wrap mb-[5%]">
                <h3 class="mb-[2.5rem] font-medium ">
                    Forgot password
                </h3>
                <div class="input-container">
                    <p class="input-text">New password</p>
                    <input type="password" placeholder="New password" class="input-input" required>

                    <p class="input-warning"></p>
                </div>
                <div class="input-container">
                    <p class="input-text">
                        Confirm password</p>
                    <input class="input-input" type="text" placeholder="Confirm password" required>
                    <p class="input-warning"></p>
                </div>
                <button class=" button ">Login</button>
                <h4 class="text-[#616161] cursor-pointer font-bold mt-5 pb-3 hover:text-[#444444]" onclick="hide()">
                    ← back</h4>
            </form>
        </div>
    </div>
    {{-- /end screen for forgot password --}}

    {{-- screen for login --}}
    <div class="loginPage opacity-100 z-30 h-screen flex flex-col items-center justify-start">
        <div class="logo">
            <div class="flex gap-3 items-center justify-center">
                <img class="h-[20%] w-[20%]  object-contain" src="{{ asset('image/MagkahiOSA Logo.svg') }}" alt="">
                <div>
                    <h3 class=' font-black text-5xl sm:text-3xl text-[#1b1855] header-font'>MAGKAHI<span class="text-[#fab415]">OSA</span> </h3>
                    <p class=' text-[19px] sm:text-[12px] tracking-[.28rem] sm:tracking-[.17rem] text-[#0d0d0d] font-normal   m-0  '>
                        CENTRALIZE &nbsp;PLATFORM</p>
                </div>
            </div>
        </div>
        <div class=" min-w-[578px] min-h-[545px] duration-500 ease-in-out bg-white rounded-[10px] flex flex-col items-center form-container
                            sm:min-w-[364px] sm:min-h-[350px] sm:mx-[200px]
                ">
            <div class="mt-[80.906px] flex items-start flex-col w-[75%] flex-wrap mb-[5%] ">
                <h3 class="mb-[40px] text-[19px] font-bold ">
                    Log In to your account
                </h3>
                <div class="w-full">
                    <form wire:submit.prevent="authenticate" class="space-y-4">
                        {{ $this->form }}
                        <x-filament::button type="submit" form="authenticate" class="w-full mt-5">
                            {{ __('filament::login.buttons.submit.label') }}
                        </x-filament::button>
                    </form>
                </div>
                <div class="hr">
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
                <p class="forgot-pass-text " onclick="show()">Forgot your password?<br />
                    Contact your administrator</p>
            </div>
        </div>
    </div>
    {{-- /end screen for login --}}
</div>

<script>
    const forgotPage = document.querySelector('.forgotPage').classList
    const loginPage = document.querySelector('.loginPage').classList

    function show() {
        forgotPage.replace('opacity-0', 'opacity-100')
        forgotPage.replace('z-20', 'z-30')
        loginPage.replace('opacity-100', 'opacity-0')
        loginPage.replace('z-30', 'z-20')
    }

    function hide() {
        forgotPage.replace('opacity-100', 'opacity-0')
        forgotPage.replace('z-30', 'z-20')
        loginPage.replace('opacity-0', 'opacity-100')
        loginPage.replace('z-20', 'z-30')
    }
</script>