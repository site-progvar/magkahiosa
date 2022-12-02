<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MagkahiOSA</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .border-gray-200 {
            --tw-border-opacity: 1;
            border-color: rgb(229 231 235 / var(--tw-border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);
            --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --tw-text-opacity: 1;
            color: rgb(229 231 235 / var(--tw-text-opacity))
        }

        .text-gray-300 {
            --tw-text-opacity: 1;
            color: rgb(209 213 219 / var(--tw-text-opacity))
        }

        .text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-700 {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --tw-bg-opacity: 1;
                background-color: rgb(31 41 55 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:border-gray-700 {
                --tw-border-opacity: 1;
                border-color: rgb(55 65 81 / var(--tw-border-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity))
            }
        }
    </style>
    <link rel="shortcut icon" href="{{ asset('image/MagkahiOSA Logo (1).png') }}" type="image/x-icon">

    @vite('resources/css/login_v2.css')

</head>

<body>

    <div class="relative overflow-hidden h-screen w-screen m-0 flex flex-col justify-items-center">

        {{-- water mark --}}
        <code class="sm:text-xs z-40 absolute bottom-0 right-0 p-[10px] login-color .login-font-size">
            &#169; USTP - SITE Programmer's Varsity 2022
        </code>


        {{-- Forgot Password Page --}}
        <div class="forgotPage opacity-0  z-20 absolute h-screen bg-white w-screen flex flex-col items-center justify-center ">
            <div
                class=" min-w-[578px] min-h-[474px] duration-500 ease-in-out shadow-md border border-[#dbd1d1] bg-white rounded-[10px] flex flex-col items-center form-container
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





        {{-- login Page --}}
    <div class=" relative  z-20  overflow-hidden h-screen w-screen m-0 flex flex-col justify-items-center">
        <div class=" flex absolute w-full bg-slate-100 h-full ">
            <div class="  bg-[#fab416] w-[40%] h-full "></div>
            <div class=" bg-slate-100 w-[70%] h-full ">
                <img class="h-[100%] w-[100%]  object-cover" src="{{ asset('image/loginv2-images/squares.png') }}">
            </div> 
        </div>

        {{-- login-container --}}
        <div class=" absolute  h-[100vh] w-[100vw]  flex justify-center items-center ">
            {{-- login-box --}}
            <div class=" w-[1550px] h-[800px] rounded-md overflow-hidden  bg-white shadow-lg ">
                <div class="relative  flex   w-full  h-full ">
                    <div class=" relative bg-[#1c1855] w-[35%] h-full flex flex-col  overflow-hidden">
                        <div class=" w-[100%] h-[100%]  flex flex-col items-center justify-center ">
                            <div class=" w-[80%] h-[70%]  flex flex-col ">
                                <div class="title border-b-2 border-[#f8f8f8e7] ">
                                    <h3 class="text-[#ffffff] contentTitle">Welcome to </h3> <h3 class=' font-black text-4xl sm:text-3xl text-[#ffffff] header-font mb-6 '>MAGKAHI<span
                                        class="text-[#fab415]">OSA</span> </h3>
                                </div>

                                <div class="mt-10 mb-[60px] h-full w-full overflow-hidden z-10  ">
                                    <p class="text-[#ffffff] h-full w-full paragraph  overflow-y-scroll z-10 ">
                                        organization processes through the Office of Student
                                        Affairs (OSA) for the past few years. Just recently, in
                                        March 2020, all transactions for students have been
                                        Eres cn= shame ona ue ee mea See
                                        a huge gap in terms of communication between the
                                        OSA and the recognized student organizations.
                                        <br> <br>
                                        Although emails and contact information have been
                                        opened to the public for transactions, students are
                                        still facing delays and backlogs in their activities which
                                        include approval of documents, email responses, and
                                        EM CMU OM Ot CNet ote Ree team ot ete aie
                                        centralized platform to organize the transactions and
                                        create a much responsive communication are left
                                        unaddressed.
                                        </p>
                                </div>
                            </div>
                            <div class="choices w-[100%] flex items-center justify-center gap-4 z-10">
                                <div class="slide1 h-4 w-4 bg-white rounded-full cursor-pointer  active" onclick="showSlide1()"></div>
                                <div class="slide2 h-4 w-4 bg-white rounded-full cursor-pointer " onclick="showSlide2()"></div>
                                <div class="slide3 h-4 w-4 bg-white rounded-full cursor-pointer  " onclick="showSlide3()"></div>
                            </div>
                        </div>
                        
                        <div class="absolute w-full h-full z-[0] flex items-start ">
                            <img class="h-[70%] w-full  object-contain mb-[20px] translate-x-[20%] translate-y-[-20%] opacity-5" src="{{ asset('image/loginv2-images/MagkahiOSA Logo.svg') }}">
                        </div>
                    </div>


                    <div class=" relative  w-[80%] h-full flex flex-col ">

                        <div class=" w-full h-full z-[1] flex items-start justify-center mt-10">
                            <div class="  w-[60%] h-[95%] flex flex-col items-center gap-3 ">
                                
                                {{-- Logo --}}
                                <div class="w-full flex items-center flex-col justify-center">
                                    <img class=" h-29 w-29  object-contain  " src="{{ asset('image/loginv2-images/MagkahiOSA Logo.svg') }}">
                                    <div class=" flex justify-center flex-col items-center mt-4 ">
                                        <h3 class=' font-black text-4xl sm:text-3xl text-[#1b1855] header-font'>MAGKAHI<span
                                            class="text-[#fab415]">OSA</span> </h3>
                                        <p class=' text-[14px] sm:text-[12px] tracking-[.28rem] sm:tracking-[.17rem] text-[#0d0d0d] font-normal   m-0  '>
                                        CENTRALIZE &nbsp;PLATFORM</p>
                                    </div>
                                </div>
                                {{-- Logo --}}
                                <div class="h-[65%] w-[80%] bg-[#474747]/5  backdrop-blur-sm flex flex-col items-center justify-center rounded-md border border-[#dbd1d1] ">
                                    <form action="" class=" h-[70%] w-[70%] flex flex-col items-start justify-start">
                                        <div class="input-container">
                                            <p class="input-text">Email</p>
                                            <input type="email" placeholder="Email Address" class="input-input" required>
                    
                                            <p class="input-warning"></p>
                                        </div>

                                        <div class="input-container">
                                            <p class="input-text">Password</p>
                                            <input type="password" placeholder="Password" class="input-input" required>
                    
                                            <p class="input-warning"></p>
                                        </div>
                                        <div class="w-full flex gap-3" >
                                            <input type="checkbox" name="" id="" class="appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200  cursor-pointer">
                                            <p class="input-text">Remember me</p>
                                        </div>

                                        <button class=" button ">Login</button>
                                        <p class="forgot-pass-text cursor-pointer " onclick="show()">Forgot your password?<br />
                                            Contact your administrator</p>
                                    </form>
                                </div>
                                

                            </div>
                        </div>

                        <div class="absolute w-full h-full z-[0] flex items-end ">
                            <img class="h-[70%] w-full  object-contain mb-[20px]  " src="{{ asset('image/loginv2-images/ustp-logo.png') }}">
                        </div>
                        
                    </div> 
                </div>
            </div>
        </div>
        
       
    </div>

    
        
        
    
    </div>

    <script>
        const contentTitle = document.querySelector('.contentTitle')
        const paragraph = document.querySelector('.paragraph')

       const slide1 = document.querySelector('.slide1').classList
       const slide2 = document.querySelector('.slide2').classList
       const slide3 = document.querySelector('.slide3').classList

        const titleList = ["Welcome to","Mission of", "Vission of"]
        const contentList = [`organization processes through the Office of Student
                                        Affairs (OSA) for the past few years. Just recently, in
                                        March 2020, all transactions for students have been
                                        Eres cn= shame ona ue ee mea See
                                        a huge gap in terms of communication between the
                                        OSA and the recognized student organizations.
                                        <br> <br>
                                        Although emails and contact information have been
                                        opened to the public for transactions, students are
                                        still facing delays and backlogs in their activities which
                                        include approval of documents, email responses, and
                                        EM CMU OM Ot CNet ote Ree team ot ete aie
                                        centralized platform to organize the transactions and
                                        create a much responsive communication are left
                                        unaddressed.`,
                                        " Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum repellat doloremque accusantium rerum delectus id commodi voluptatem ab, dicta similique. Ex reiciendis nam rem blanditiis officiis et enim fuga quidem? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum repellat doloremque accusantium rerum delectus id commodi voluptatem ab, dicta similique. Ex reiciendis nam rem blanditiis officiis et enim fuga quidem?",
                                         "Vission of  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum repellat doloremque accusantium rerum delectus id commodi voluptatem ab, dicta similique. Ex reiciendis nam rem blanditiis officiis et enim fuga quidem? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum repellat doloremque accusantium rerum delectus id commodi voluptatem ab, dicta similique. Ex reiciendis nam rem blanditiis officiis et enim fuga quidem? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum repellat doloremque accusantium rerum delectus id commodi voluptatem ab, dicta similique. Ex reiciendis nam rem blanditiis officiis et enim fuga quidem? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum repellat doloremque accusantium rerum delectus id commodi voluptatem"]


       function showSlide1(){
        console.log("1")

             contentTitle.textContent = titleList[0]
             paragraph.textContent = contentList[0]

            slide1.add('active')
            
            slide2.remove('active')
            slide3.remove('active')
       }
       function showSlide2(){
        console.log("2")
            
            contentTitle.textContent = titleList[1]
             paragraph.textContent = contentList[1]

            slide1.remove('active')
            slide2.add('active')
            slide3.remove('active')
       }
       function showSlide3(){
        console.log("3")
            
            contentTitle.textContent = titleList[2]
             paragraph.textContent = contentList[2]

            slide1.remove('active')
            slide2.remove('active')
            slide3.add('active')
       }

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
