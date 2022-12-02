<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MagkahiOSA</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('image/MagkahiOSA Logo (1).png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')

</head>

<body>

    <div class="absolute overflow-hidden h-screen w-screen m-0 flex flex-col justify-items-center"
        ">

        {{--Responsive background --}}
        <div class=" absolute z-0 flex items-center justify-center h-full w-full  ">
            <img class=" h-[98%] w-[98%] object-contain sm:object-cover putot:object-cover " src="{{ asset('image/loginv2-images/ustp-logo.png') }}" alt="">
        </div>
        

        {{-- water mark --}}
        <code class="sm:text-xs z-40 absolute bottom-0 right-0 p-[10px] login-color text-sm text-[#535353] ">
            &#169; USTP - SITE Programmer's Varsity 2022
        </code>


        {{-- screen for forgot password --}}
        <div
            class="forgotPage opacity-0 z-20 absolute h-screen w-screen flex flex-col items-center justify-center ">
            <div
                class=" min-w-[578px] min-h-[474px] duration-500 ease-in-out bg-white rounded-[10px] flex flex-col items-center form-container
                            sm:min-w-[364px] sm:min-h-[350px] sm:mx-[200px]
                            ssm:min-w-[98%]
                            ">
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
                        <i class="fa-sharp fa-solid fa-arrow-left"></i>&nbsp;  back</h4>
                </form>
            </div>
        </div>
        {{-- /end screen for forgot password --}}

        {{-- screen for login --}}
        <div class="loginPage opacity-100 z-30 h-screen flex flex-col items-center justify-start">
            <div class="logo">
                <div class="flex gap-3 items-center justify-center ">
                    <img class="h-[20%] w-[20%]
                        ssm:h-[85px] ssm:w-[85px] 
                         object-contain" src="{{ asset('image/MagkahiOSA Logo.svg') }}"
                        alt="">
                    <div class=" ">
                        <h3 class=' font-black text-5xl  text-[#1b1855] header-font
                                    sm:text-3xl 
                                    ssm:hidden
                                    putot:text-4xl 
                        '>MAGKAHI<span
                                class="text-[#fab415]">OSA</span> </h3>
                        <p
                            class=' text-[19px] tracking-[.28rem]  text-[#0d0d0d] font-normal   m-0  
                                    sm:text-[12px] sm:tracking-[.17rem]
                                    ssm:hidden
                                    putot:text-[12.5px]
                            '>
                            CENTRALIZE &nbsp;PLATFORM</p>
                    </div>
                </div>
            </div>
            <div
                class=" min-w-[578px] h-[545px] duration-500 ease-in-out bg-white rounded-[10px] flex flex-col items-center form-container
                            sm:min-w-[364px] sm:min-h-[350px] sm:mx-[200px]
                            ssm:min-w-[98%]
                            putot:h-[515px] 
                            
                ">
                <form class="mt-[80.906px] flex items-start flex-col w-[75%] flex-wrap mb-[5%]
                                putot:mt-[60px]  putot:mb-[0%]           
                ">
                    <h3 class="mb-[40px] text-[19px] font-bold ">
                        Log In to your account
                    </h3>
                    <div class="input-container">
                        <p class="input-text">Email Address</p>
                        <input type="email" placeholder="Email address" required class="input-input">

                        <p class="input-warning"></p>
                    </div>
                    <div class="input-container">
                        <p class="input-text">
                            Password
                        </p>
                        <input class="input-input" type="password" placeholder="Password" required>
                        <p class="input-warning"></p>
                    </div>
                    <button class="button " type="submit">Log In</button>

                    <div class="hr">
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                    <p class="forgot-pass-text " onclick="show()">Forgot your password?<br />
                        Contact your administrator</p>
                </form>
            </div>
        </div>
        {{-- /end screen for login --}}
    </div>

    <script>
        const forgotPage = document.querySelector('.forgotPage').classList
        const loginPage = document.querySelector('.loginPage').classList

        function show() {
            forgotPage.replace('opacity-0','opacity-100')
            forgotPage.replace('z-20','z-30')
            loginPage.replace('opacity-100','opacity-0')
            loginPage.replace('z-30','z-20')
        }

        function hide() {
            forgotPage.replace('opacity-100','opacity-0')
            forgotPage.replace('z-30','z-20')
            loginPage.replace('opacity-0','opacity-100')
            loginPage.replace('z-20','z-30')
        }
    </script>
</body>

</html>
