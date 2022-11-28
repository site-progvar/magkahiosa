<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @livewireScripts
    @stack('scripts')
</head>

<body class="antialiased">
    <div class=" absolute overflow-hidden h-screen w-screen m-0">
        <code class=" z-[2] absolute bottom-0 right-0 p-[10px] login-color .login-font-size">
            &#169; USTP - SITE Programmer's Varsity 2022
        </code>
        <div
            class="forgot opacity-0 absolute z-[1] h-screen flex w-screen flex-col items-center justify-center bg-white">
            <div class=" min-w-[578px] min-h-[474px] bg-white rounded-[10px] flex flex-col items-center form-container">
                <div class="mt-[14%] flex items-start flex-col w-[75%] flex-wrap mb-[5%]">
                    <h3 class="mb-[2.5rem]">
                        Forgot password
                    </h3>
                    <div class="mb-[20px] w-full relative">
                        <p class=" font-semibold text-size m-0 mb-[8px]">
                            New password
                        </p>
                        <input type="text" placeholder="New password"
                            class="m-0 font-medium w-[94%] h-[1.5rem] input-text bg-white focus:input-focus">
                        <p class="m-0 font-semibold text-[red] text-[.74rem] mt-[2px] ml-[2px]">
                        </p>
                    </div>
                    <div class="mb-[20px] w-full relative">
                        <p class=" font-semibold text-size m-0 mb-[8px]">
                            Confirm password
                        </p>
                        <input type="text" placeholder="Confirm password"
                            class="m-0 font-medium w-[94%] h-[1.5rem] input-text bg-white focus:input-focus">
                        <p class="m-0 font-semibold text-[red] text-[.74rem] mt-[2px] ml-[2px]">
                        </p>
                    </div>
                    <button class="w-full h-[2.5rem] text-white text-[.8rem] cursor-pointer button hover:button-hover">Login</button>
                    <h4 class="text-[#616161] cursor-pointer">←  back</h4>
                </div>
            </div>
        </div>
        <div class="relative z-[1] h-screen w-screen flex flex-col items-center justify-start bg-white transition-new">
            <div class="mt-3[rem] h-[200px] w-[578px] flex items-center justify-center transition-new"></div>
        </div>
    </div>

    @livewire('notifications')
</body>

</html>
