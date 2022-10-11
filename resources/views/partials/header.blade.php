<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <title>Bedouin Travel</title>
    <script src="{{ asset('js/tailwind.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/vanilla-calendar.min.css') }}">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    {!! RecaptchaV3::initJs() !!}

</head>

<body>
    <header class="fixed top-0 z-[100] w-full">
        <div class="bg-black/30 p-[1rem] backdrop-blur-md">
            <div class="container mx-auto flex items-center justify-between">
                <div class="hamburger_menu lg:hidden block">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div>
                    <a href="/"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a>
                </div>
                <div class="flex items-center gap-7 text-white">
                <div class="hidden lg:block text-sm hover:text-[#FFC66A]">
                        <a href="/dessert-safaris">Dessert Safaris</a>
                    </div>
                    <div class="hidden lg:block text-sm hover:text-[#FFC66A]">
                        <a href="/popular-attractions">Popular Attractions</a>
                    </div>
                    <div class="hidden lg:block text-sm hover:text-[#FFC66A]">
                        <a href="/sight-seeing">Sight Seeing</a>
                    </div>
                    <div class="hidden lg:block text-sm hover:text-[#FFC66A]">
                        <a href="/special-offers">Offers</a>
                    </div>
                    <div class="hidden lg:block text-sm hover:text-[#FFC66A]">
                        <a href="/events">Events</a>
                    </div>
                    <div class="hidden lg:block text-sm hover:text-[#FFC66A]">
                        <a href="/help">Help</a>
                    </div>
                    <div class="flex items-center gap-5">
                        <div>
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.10774 16.9497C5.00643 16.9497 4.11537 17.8508 4.11537 18.9521C4.11537 20.0534 5.00643 20.9545 6.10774 20.9545C7.20905 20.9545 8.11012 20.0534 8.11012 18.9521C8.11012 17.8508 7.20905 16.9497 6.10774 16.9497ZM0.100586 0.930664V2.93305H2.10297L5.70726 10.5321L4.35565 12.985C4.19546 13.2654 4.10535 13.5957 4.10535 13.9462C4.10535 15.0475 5.00643 15.9485 6.10774 15.9485H18.122V13.9462H6.52824C6.38807 13.9462 6.27794 13.836 6.27794 13.6959L6.30798 13.5757L7.20905 11.9438H14.6679C15.4188 11.9438 16.0796 11.5333 16.42 10.9125L20.0043 4.41481C20.0869 4.26202 20.1285 4.09041 20.1249 3.91675C20.1214 3.74309 20.0728 3.57332 19.9841 3.42402C19.8953 3.27472 19.7693 3.15101 19.6184 3.06495C19.4676 2.9789 19.2969 2.93345 19.1232 2.93305H4.3156L3.37448 0.930664H0.100586ZM16.1197 16.9497C15.0183 16.9497 14.1273 17.8508 14.1273 18.9521C14.1273 20.0534 15.0183 20.9545 16.1197 20.9545C17.221 20.9545 18.122 20.0534 18.122 18.9521C18.122 17.8508 17.221 16.9497 16.1197 16.9497Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <button class="bg-[#FFC66A] rounded-lg px-4 py-[0.35rem] font-semibold text-black">Book
                            Now</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div class="lg:hidden hidden h-[100vh] top-0 backdrop-blur-sm z-[100000000] left-0 w-full responsive_header">
            <div class="h-full w-[65%] bg-black/60 text-white">
                <div class="flex flex-col gap-4 justify-center p-[2rem]">
                <a href="/dessert-safaris">Dessert Safaris</a>
                <a href="/popular-attractions">Popular Attractions</a>
                <a href="/sight-seeing">Sight Seeing</a>
                <a href="/special-offers">Offers</a>
                <a href="/events">Events</a>
                <a href="/help">Help</a>
            
                </div>
            </div>
        </div>
    </header>
