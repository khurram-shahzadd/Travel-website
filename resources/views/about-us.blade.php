@include('partials/header')
<section>
    <div class="about-us-banner h-[100vh] flex justify-center items-center flex-col">
        <div class="text-center text-white pb-2 mt-[2rem]">
            <h2 class="text-6xl font-bold">About US</h2>
        </div>
        <div class="flex text-white flex-row gap-2 items-center text-[12px] sm:text-[14px] lg:text-xl">
            <a href="/">Home</a>
            <svg width="11" height="16" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 9L2.222 0L0 2.2782L6.556 9L0 15.7218L2.222 18L11 9Z" fill="white" />
            </svg>
            <span><a href="/about-us">About Us</a></span>
        </div>
    </div>
</section>
<section class="bg-[#0D1118]">
    <div class="container mx-auto md:pt-[2rem] lg:pt-[4rem] pt-[2rem] md:w-[85%] lg:w-[74%] w-[90%]" id="who_we_are">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div class="flex flex-col gap-6">
                <h1
                    class="text-white font-bold leading-[1.4] md:text-[2rem] pb-[1rem] text-[1rem] md:text-left text-center">
                    Why Us ?
                </h1>
                <p class="text-white">At modern Beudino, we believe that traveling, experiencing and exploring the
                    different cultures of the world is the key to understanding, tolerance, and happiness.
                </p>
                <p class="text-white">At modern Beudino, we believe that traveling, experiencing and exploring the
                    different cultures of the world is the key to understanding, tolerance, and happiness.
                </p>
            </div>
            <div class="relative">
                <img src="{{asset('images/why-us.png')}}" class="object-cover rounded-lg w-full h-[400px]">
                <div class="absolute bottom-[-1rem] left-[-1rem]">
                    <img src="{{asset('images/dots.png')}}" class="object-cover h-[8rem] w-full">
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto md:pt-[2rem] lg:pt-[4rem] pt-[2rem] md:w-[85%] lg:w-[74%] w-[90%]" id="who_we_are">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div class="relative">
                <img src="{{asset('images/unique.png')}}" class="object-cover rounded-lg w-full h-[100%]">
                <div class="absolute bottom-[-1rem] right-[-1rem]">
                    <img src="{{asset('images/dots.png')}}" class="object-cover h-[8rem] w-full">
                </div>
            </div>
            <div class="flex flex-col gap-6">
                <h1
                    class="text-white font-bold leading-[1.4] md:text-[2rem] pb-[1rem] text-[1rem] md:text-left text-center">
                    What Makes Us Unique ?
                </h1>
                <p class="text-white">At modern Beudino, we believe that traveling, experiencing and exploring the
                    different cultures.
                </p>
                <div class="bg-[#202022] flex flex-row gap-4 py-[1rem] px-[1rem] rounded-lg">
                    <div class="flex">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="22" cy="22" r="21.2143" fill="#CC8A8A" fill-opacity="0.2" stroke="#CC8A8A"
                                stroke-width="1.57143" />
                            <path
                                d="M22.9004 13.0326C24.075 13.2786 25.0387 13.7766 25.8659 14.4934C26.1003 14.6966 26.1281 15.0624 25.9299 15.3033L24.9204 16.5303C24.7327 16.7585 24.4071 16.797 24.1724 16.6214C23.2638 15.9414 22.3221 15.6171 21.2408 15.6171C19.9987 15.6171 19.2167 16.164 19.2167 17.139C19.2167 18.1376 19.7917 18.5419 22.161 19.3029C25.0592 20.2541 26.7154 21.5144 26.7154 24.4155C26.7154 26.7162 25.3081 28.482 22.8666 29.1448C22.6257 29.2102 22.4599 29.4388 22.4599 29.6964V32.427C22.4599 32.7435 22.2117 33 21.9056 33H20.369C20.0628 33 19.8147 32.7434 19.8147 32.427V29.8998C19.8147 29.6149 19.6124 29.3702 19.3392 29.3331C17.6051 29.0978 16.2575 28.4187 15.2477 27.5472C15.0072 27.3397 14.8078 27.1678 15.0186 26.9283L16.3983 25.3611C16.7022 25.0159 16.8489 25.1877 17.0764 25.3696C18.0644 26.1595 19.1862 26.6033 20.5048 26.6033C21.9999 26.6033 22.8971 25.89 22.8971 24.7009C22.8971 23.5595 22.3449 23.0363 20.1367 22.323C16.6864 21.2291 15.4673 19.7548 15.4673 17.4243C15.4673 15.1366 17.0429 13.5258 19.3836 13.0109C19.6364 12.9553 19.8147 13.0197 19.8147 12.7525V9.6852C19.8147 9.3687 20.0629 9.4342 20.369 9.4342H21.9056C22.2118 9.4342 22.4599 9.69077 22.4599 10.0072V12.4734C22.4599 12.7442 22.6437 12.9789 22.9004 13.0326Z"
                                fill="white" />
                        </svg>
                    </div>
                    <div class="flex flex-col gap:1 md:gap-0">
                        <h4 class="text-white font-semibold">
                            Title
                        </h4>
                        <p class="text-white text-[14px]">
                            Quisque massa ipsum, luctus at tempus eleif.
                        </p>
                    </div>
                </div>
                <div class="bg-[#202022] flex flex-row gap-4 py-[1rem] px-[1rem] rounded-lg">
                    <div class="flex">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="22" cy="22" r="21.2143" fill="#CC8A8A" fill-opacity="0.2" stroke="#CC8A8A"
                                stroke-width="1.57143" />
                            <path
                                d="M22.9004 13.0326C24.075 13.2786 25.0387 13.7766 25.8659 14.4934C26.1003 14.6966 26.1281 15.0624 25.9299 15.3033L24.9204 16.5303C24.7327 16.7585 24.4071 16.797 24.1724 16.6214C23.2638 15.9414 22.3221 15.6171 21.2408 15.6171C19.9987 15.6171 19.2167 16.164 19.2167 17.139C19.2167 18.1376 19.7917 18.5419 22.161 19.3029C25.0592 20.2541 26.7154 21.5144 26.7154 24.4155C26.7154 26.7162 25.3081 28.482 22.8666 29.1448C22.6257 29.2102 22.4599 29.4388 22.4599 29.6964V32.427C22.4599 32.7435 22.2117 33 21.9056 33H20.369C20.0628 33 19.8147 32.7434 19.8147 32.427V29.8998C19.8147 29.6149 19.6124 29.3702 19.3392 29.3331C17.6051 29.0978 16.2575 28.4187 15.2477 27.5472C15.0072 27.3397 14.8078 27.1678 15.0186 26.9283L16.3983 25.3611C16.7022 25.0159 16.8489 25.1877 17.0764 25.3696C18.0644 26.1595 19.1862 26.6033 20.5048 26.6033C21.9999 26.6033 22.8971 25.89 22.8971 24.7009C22.8971 23.5595 22.3449 23.0363 20.1367 22.323C16.6864 21.2291 15.4673 19.7548 15.4673 17.4243C15.4673 15.1366 17.0429 13.5258 19.3836 13.0109C19.6364 12.9553 19.8147 13.0197 19.8147 12.7525V9.6852C19.8147 9.3687 20.0629 9.4342 20.369 9.4342H21.9056C22.2118 9.4342 22.4599 9.69077 22.4599 10.0072V12.4734C22.4599 12.7442 22.6437 12.9789 22.9004 13.0326Z"
                                fill="white" />
                        </svg>
                    </div>
                    <div class="flex flex-col gap:1 md:gap-0">
                        <h4 class="text-white font-semibold">
                            Title
                        </h4>
                        <p class="text-white text-[14px]">
                            Quisque massa ipsum, luctus at tempus eleif.
                        </p>
                    </div>
                </div>
                <div class="bg-[#202022] flex flex-row gap-4 py-[1rem] px-[1rem] rounded-lg">
                    <div class="flex">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="22" cy="22" r="21.2143" fill="#CC8A8A" fill-opacity="0.2" stroke="#CC8A8A"
                                stroke-width="1.57143" />
                            <path
                                d="M22.9004 13.0326C24.075 13.2786 25.0387 13.7766 25.8659 14.4934C26.1003 14.6966 26.1281 15.0624 25.9299 15.3033L24.9204 16.5303C24.7327 16.7585 24.4071 16.797 24.1724 16.6214C23.2638 15.9414 22.3221 15.6171 21.2408 15.6171C19.9987 15.6171 19.2167 16.164 19.2167 17.139C19.2167 18.1376 19.7917 18.5419 22.161 19.3029C25.0592 20.2541 26.7154 21.5144 26.7154 24.4155C26.7154 26.7162 25.3081 28.482 22.8666 29.1448C22.6257 29.2102 22.4599 29.4388 22.4599 29.6964V32.427C22.4599 32.7435 22.2117 33 21.9056 33H20.369C20.0628 33 19.8147 32.7434 19.8147 32.427V29.8998C19.8147 29.6149 19.6124 29.3702 19.3392 29.3331C17.6051 29.0978 16.2575 28.4187 15.2477 27.5472C15.0072 27.3397 14.8078 27.1678 15.0186 26.9283L16.3983 25.3611C16.7022 25.0159 16.8489 25.1877 17.0764 25.3696C18.0644 26.1595 19.1862 26.6033 20.5048 26.6033C21.9999 26.6033 22.8971 25.89 22.8971 24.7009C22.8971 23.5595 22.3449 23.0363 20.1367 22.323C16.6864 21.2291 15.4673 19.7548 15.4673 17.4243C15.4673 15.1366 17.0429 13.5258 19.3836 13.0109C19.6364 12.9553 19.8147 13.0197 19.8147 12.7525V9.6852C19.8147 9.3687 20.0629 9.4342 20.369 9.4342H21.9056C22.2118 9.4342 22.4599 9.69077 22.4599 10.0072V12.4734C22.4599 12.7442 22.6437 12.9789 22.9004 13.0326Z"
                                fill="white" />
                        </svg>
                    </div>
                    <div class="flex flex-col gap:1 md:gap-0">
                        <h4 class="text-white font-semibold">
                            Title
                        </h4>
                        <p class="text-white text-[14px]">
                            Quisque massa ipsum, luctus at tempus eleif.
                        </p>
                    </div>
                </div>
                <div class="bg-[#202022] flex flex-row gap-4 py-[1rem] px-[1rem] rounded-lg">
                    <div class="flex">
                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="22" cy="22" r="21.2143" fill="#CC8A8A" fill-opacity="0.2" stroke="#CC8A8A"
                                stroke-width="1.57143" />
                            <path
                                d="M22.9004 13.0326C24.075 13.2786 25.0387 13.7766 25.8659 14.4934C26.1003 14.6966 26.1281 15.0624 25.9299 15.3033L24.9204 16.5303C24.7327 16.7585 24.4071 16.797 24.1724 16.6214C23.2638 15.9414 22.3221 15.6171 21.2408 15.6171C19.9987 15.6171 19.2167 16.164 19.2167 17.139C19.2167 18.1376 19.7917 18.5419 22.161 19.3029C25.0592 20.2541 26.7154 21.5144 26.7154 24.4155C26.7154 26.7162 25.3081 28.482 22.8666 29.1448C22.6257 29.2102 22.4599 29.4388 22.4599 29.6964V32.427C22.4599 32.7435 22.2117 33 21.9056 33H20.369C20.0628 33 19.8147 32.7434 19.8147 32.427V29.8998C19.8147 29.6149 19.6124 29.3702 19.3392 29.3331C17.6051 29.0978 16.2575 28.4187 15.2477 27.5472C15.0072 27.3397 14.8078 27.1678 15.0186 26.9283L16.3983 25.3611C16.7022 25.0159 16.8489 25.1877 17.0764 25.3696C18.0644 26.1595 19.1862 26.6033 20.5048 26.6033C21.9999 26.6033 22.8971 25.89 22.8971 24.7009C22.8971 23.5595 22.3449 23.0363 20.1367 22.323C16.6864 21.2291 15.4673 19.7548 15.4673 17.4243C15.4673 15.1366 17.0429 13.5258 19.3836 13.0109C19.6364 12.9553 19.8147 13.0197 19.8147 12.7525V9.6852C19.8147 9.3687 20.0629 9.4342 20.369 9.4342H21.9056C22.2118 9.4342 22.4599 9.69077 22.4599 10.0072V12.4734C22.4599 12.7442 22.6437 12.9789 22.9004 13.0326Z"
                                fill="white" />
                        </svg>
                    </div>
                    <div class="flex flex-col gap:1 md:gap-0">
                        <h4 class="text-white font-semibold">
                            Title
                        </h4>
                        <p class="text-white text-[14px]">
                            Quisque massa ipsum, luctus at tempus eleif.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto md:pt-[2rem] lg:pt-[4rem] pt-[2rem] md:w-[85%] lg:w-[74%] w-[90%]" id="who_we_are">
        <div class="grid grid-cols-3">
            <div class="col-span-2">
                <img src="{{asset('images/about-xs.png')}}" class="object-cover" />
            </div>
            <div class="col-span-1  self-end">
                <img src="{{asset('images/about-sm.png')}}" class="object-cover md:h-[250px]" />
            </div>
        </div>
    </div>
    <div class="container mx-auto md:pt-[0] lg:pt-[0rem] pt-[0rem] md:w-[85%] lg:w-[74%] w-[90%]" id="who_we_are">
        <div class="grid grid-cols-3">
            <div class="col-span-1  self-start flex justify-end">
                <img src="{{asset('images/about-sm-1.png')}}" class="object-cover md:h-[250px]" />
            </div>
            <div class="col-span-2">
                <img src="{{asset('images/about-xs-1.png')}}" class="object-cover" />
            </div>
        </div>
    </div>
    <div class="container mx-auto md:py-[2rem] lg:py-[4rem] py-[2rem] md:w-[85%] lg:w-[74%] w-[90%]" id="about-us">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
            <div class="flex flex-col gap-3">
                <h4 class="text-white font-semibold text-center">
                    Our Mission
                </h4>
                <p class="text-white text-[14px] text-center px-10">
                    Quisque massa ipsum, luctus at tempus eleifend congue quis lectus. Morbi bibendum nisl id porttitor
                    ultrices odio elit vestibulum metus, ac semper velit quam sed nulla aenean eu hendrerit dolor sed
                    viverra ligula nullam mattis enim sit amet orci auctor.
                </p>
            </div>
            <div class="flex flex-col gap-3">
                <h4 class="text-white font-semibold text-center">
                    Our Vision
                </h4>
                <p class="text-white text-[14px] text-center px-10">
                    Quisque massa ipsum, luctus at tempus eleifend congue quis lectus. Morbi bibendum nisl id porttitor
                    ultrices odio elit vestibulum metus, ac semper velit quam sed nulla aenean eu hendrerit dolor sed
                    viverra ligula nullam mattis enim sit amet orci auctor.
                </p>
            </div>
        </div>
    </div>
    <div class="py-[3.2rem] subscribe-bg" id="newsletter">
        <div class="text-center text-white">
            <h2 class="font-semibold md:text-[3rem] text-[2rem] leading-[1]">Subscribe to get more information <br class="hidden md:block"> about our expansion</h2>
            <form action="{{ route('newsletter.submit') }}" method="post"
                class="rounded-[4rem] p-[0.3rem] bg-[#FFFFFF99] w-[90%] md:w-[30rem] mx-auto mt-[3rem] flex overflow-hidden">
                @csrf
                <div class="flex-1">
                    <input type="email"
                        class="text-sm bg-transparent font-semibold outline-none text-[#191919] placeholder:text-[#191919] w-full h-full px-3"
                        placeholder="Type your email here" name="email_address" required>
                </div>
                {!! RecaptchaV3::field('register') !!}
                <button
                    class="bg-[#FFC66A] rounded-[4rem] px-4 py-[0.5rem] font-semibold text-black text-sm">Subscribe</button>      
            </form>
            <div class="rounded-[4rem] w-[90%] md:w-[30rem] mx-auto mt-[3rem] flex">
                <div class="flex-1">
                    @if(session()->has('nl_success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 mb-4 py-3 rounded relative">
                        {{ session()->get('nl_success') }}
                    </div>
                    @elseif(session()->has('nl_error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mb-4 rounded relative">
                        {{ session()->get('nl_error') }}
                    @endif
                </div>
            </div>
            {{-- @if(session()->has('nl_success')) --}}
            {{-- <div class="bg-green-100 border border-green-400 text-green-700 px-4 mb-4 py-3 rounded relative">
                {{ session()->get('nl_success') }}fggff
            </div> --}}
            {{-- @elseif(session()->has('nl_error')) --}}
            {{-- <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mb-4 rounded relative">
                {{ session()->get('nl_error') }}dffgfdg
            </div> --}}
            {{-- @endif --}}
       </div>
    </div>
</section>
@include('partials/footer')