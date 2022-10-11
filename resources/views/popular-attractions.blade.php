@include('partials/header')
<section>
    <div class="popular-attraction-banner h-[100vh] flex justify-center items-center flex-col">
        <div class="text-center text-white pb-2 mt-[2rem]">
            <h2 class="text-6xl font-bold">Popular Attractions</h2>
        </div>
        <div class="flex text-white flex-row gap-2 items-center text-[12px] sm:text-[14px] lg:text-xl">
            <a href="/">Home</a>
            <svg width="11" height="16" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 9L2.222 0L0 2.2782L6.556 9L0 15.7218L2.222 18L11 9Z" fill="white" />
            </svg>
            <span><a href="/popular-attractions">Popular Attractions</a></span>
        </div>
    </div>
</section>
<section class="bg-[#0D1118]">
    <div class="container mx-auto md:pt-[2rem] lg:pt-[4rem] pt-[2rem] md:w-[85%] lg:w-[74%] w-[90%]" id='who_we_are'>
        <div class="grid lg:grid-cols-2 gap-6">
            <div class="py-[1rem] lg:text-left text-center">
                <div class="flex flex-col gap-6">
                    <h1 class="text-white font-bold md:text-[2.2rem]  text-[2.6rem] md:text-left text-center">
                        Dubai’s Best Desert Experience
                    </h1>
                    <p class="text-white text-sm">Our range of desert safaris has been created to suit <br
                            class="hidden md:block">different types of
                        travellers. Whether you are looking <br class="hidden md:block"> for adventure, an escape into
                        Dubai’s nature, a <br class="hidden md:block">traditional
                        encounter with Bedouin, or a luxurious <br class="hidden md:block">journey through the sand
                        dunes, we have meticulously <br class="hidden md:block">created
                        the experience for you!</p>

                    <div class="flex flex-row gap-3 ">
                        <a href="/cart" class="bg-[#FFC66A] rounded-lg px-4 py-[0.35rem] font-semibold text-black">Book
                            Now</a>
                        <a href="/gallery" class="text-[#FFC66A] px-4 py-[0.35rem] ">View Gallery</a>
                    </div>
                </div>

            </div>
            <div class="grid lg:first:grid-cols-2 gap-[1rem]">
                <img src="{{asset('images/popular-attraction-sm.png')}}"
                    class="w-full object-cover rounded-xl h-[10rem] lg:h-[20rem]">
                <img src="{{asset('images/popular-attraction-sm-1.png')}}"
                    class="w-full object-cover rounded-xl h-[10rem] lg:h-[20rem]">
                <img src="{{asset('images/popular-attraction-lg.png')}}"
                    class="w-full object-cover rounded-xl lg:col-span-2 h-[10rem]">
            </div>
        </div>
    </div>
    <div class="container mx-auto md:pt-[2rem] lg:pt-[4rem] pt-[2rem] md:w-[85%] lg:w-[74%] w-[90%]" id='who_we_are'>
        <div class="flex flex-col gap-8">
            <h3 class="text-white text-4xl font-semibold text-center">Top Attractions</h3>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-3">
                <div class="col-span-2">
                    <div class="flex flex-col relative bg-black rounded-xl">
                        <img src="{{asset('images/alkhyama-camp.png')}} "
                            class="w-full object-cover rounded-xl opacity-[0.7]" alt="Alkhyama Camp">
                        <div class="flex flex-col md:flex-row absolute bottom-3 px-[1rem]">
                            <div class="flex flex-col flex-[30%]">
                                <h3 class="text-white leading-4">Alkhyama Camp</h3>
                                <a href="/explore-now" class="text-[#FFC66A] text-[12px] underline cursor-pointer">Explore Now</a>
                            </div>
                            <div class="flex-[70%] flex flex-row gap-3">
                                <svg width="3" height="38" viewBox="0 0 3 38" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.714844" y="0.375122" width="1.55013" height="36.6373" fill="white" />
                                </svg>
                                <p class="text-white text-[11px] ">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex flex-col relative bg-black rounded-xl">
                        <img src="{{asset('images/al-marmoom.png')}} "
                            class="w-full object-cover rounded-xl opacity-[0.7]" alt="Al Marmoom">
                        <div class="flex flex-col md:flex-row absolute bottom-3 px-[1rem]">
                            <div class="flex flex-col flex-[30%]">
                                <h3 class="text-white leading-4">Al Marmoom</h3>
                                <a href="/explore-now" class="text-[#FFC66A] text-[12px] underline cursor-pointer">Explore Now</a>
                            </div>
                            <div class="flex-[70%] flex flex-row gap-3">
                                <svg width="3" height="38" viewBox="0 0 3 38" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.714844" y="0.375122" width="1.55013" height="36.6373" fill="white" />
                                </svg>
                                <p class="text-white text-[11px] ">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex flex-col relative bg-black rounded-xl">
                        <img src="{{asset('images/dune-bashing.png')}} "
                            class="w-full object-cover rounded-xl opacity-[0.7]" alt="Dune Bashing">
                        <div class="flex flex-col md:flex-row absolute bottom-3 px-[1rem]">
                            <div class="flex flex-col flex-[30%]">
                                <h3 class="text-white leading-4">Dune Bashing</h3>
                                <a href="/explore-now" class="text-[#FFC66A] text-[12px] underline cursor-pointer">Explore Now</a>
                            </div>
                            <div class="flex-[70%] flex flex-row gap-3">
                                <svg width="3" height="38" viewBox="0 0 3 38" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.714844" y="0.375122" width="1.55013" height="36.6373" fill="white" />
                                </svg>
                                <p class="text-white text-[11px] ">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex flex-col relative bg-black rounded-xl">
                        <img src="{{asset('images/sheikhzayed-grand-mosque.png')}} "
                            class="w-full object-cover rounded-xl opacity-[0.7]" alt="Sheikh Zayed Grand Mosque">
                        <div class="flex flex-col md:flex-row absolute bottom-3 px-[1rem]">
                            <div class="flex flex-col flex-[30%]">
                                <h3 class="text-white leading-4">Sheikh Zayed Grand Mosque</h3>
                                <a href="/explore-now" class="text-[#FFC66A] text-[12px] underline cursor-pointer">Explore Now</a>
                            </div>
                            <div class="flex-[70%] flex flex-row gap-3">
                                <svg width="3" height="38" viewBox="0 0 3 38" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.714844" y="0.375122" width="1.55013" height="36.6373" fill="white" />
                                </svg>
                                <p class="text-white text-[11px] ">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex flex-col relative bg-black rounded-xl">
                        <img src="{{asset('images/jet-ski.png')}} " class="w-full object-cover rounded-xl opacity-[0.7]"
                            alt="Jet Ski">
                        <div class="flex flex-col md:flex-row absolute bottom-3 px-[1rem]">
                            <div class="flex flex-col flex-[30%]">
                                <h3 class="text-white leading-4">Jet Ski</h3>
                                <a href="/explore-now" class="text-[#FFC66A] text-[12px] underline cursor-pointer">Explore Now</a>
                            </div>
                            <div class="flex-[70%] flex flex-row gap-3">
                                <svg width="3" height="38" viewBox="0 0 3 38" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.714844" y="0.375122" width="1.55013" height="36.6373" fill="white" />
                                </svg>
                                <p class="text-white text-[11px] ">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex flex-col relative bg-black rounded-xl">
                        <img src="{{asset('images/alkhyama-heritage-house.png')}} "
                            class="w-full object-cover rounded-xl opacity-[0.7]" alt="Alkhyama Heritage House">
                        <div class="flex flex-col md:flex-row absolute bottom-3 px-[1rem]">
                            <div class="flex flex-col flex-[30%]">
                                <h3 class="text-white leading-4">Alkhyama Heritage House</h3>
                                <a href="/explore-now" class="text-[#FFC66A] text-[12px] underline cursor-pointer">Explore Now</a>
                            </div>
                            <div class="flex-[70%] flex flex-row gap-3">
                                <svg width="3" height="38" viewBox="0 0 3 38" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.714844" y="0.375122" width="1.55013" height="36.6373" fill="white" />
                                </svg>
                                <p class="text-white text-[11px] ">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex flex-col relative bg-black rounded-xl">
                        <img src="{{asset('images/camel-riding.png')}} "
                            class="w-full object-cover rounded-xl opacity-[0.7]" alt="Camel Riding">
                        <div class="flex flex-col md:flex-row absolute bottom-3 px-[1rem]">
                            <div class="flex flex-col flex-[30%]">
                                <h3 class="text-white leading-4">Camel Riding</h3>
                                <a href="/explore-now" class="text-[#FFC66A] text-[12px] underline cursor-pointer">Explore Now</a>
                            </div>
                            <div class="flex-[70%] flex flex-row gap-3">
                                <svg width="3" height="38" viewBox="0 0 3 38" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.714844" y="0.375122" width="1.55013" height="36.6373" fill="white" />
                                </svg>
                                <p class="text-white text-[11px] ">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="flex flex-col relative bg-black rounded-xl">
                        <img src="{{asset('images/traditional-souks.png')}} "
                            class="w-full object-cover rounded-xl opacity-[0.7]" alt="Traditional Souks">
                        <div class="flex flex-col md:flex-row absolute bottom-3 px-[1rem]">
                            <div class="flex flex-col flex-[30%]">
                                <h3 class="text-white leading-4">Traditional Souks</h3>
                                <a href="/explore-now" class="text-[#FFC66A] text-[12px] underline cursor-pointer">Explore Now</a>
                            </div>
                            <div class="flex-[70%] flex flex-row gap-3">
                                <svg width="3" height="38" viewBox="0 0 3 38" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.714844" y="0.375122" width="1.55013" height="36.6373" fill="white" />
                                </svg>
                                <p class="text-white text-[11px] ">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto md:pt-[2rem] lg:pt-[4rem] pt-[2rem] md:w-[85%] lg:w-[74%] w-[90%]" id='who_we_are'>
        <div class="flex flex-col gap-8">
            <h3 class="text-white text-4xl font-semibold text-center">Gallery of Our Experience</h3>
            <div class="flex flex-col gap-5">
                <div class="tab flex flex-row justify-center gap-6 font-semibold custom-tabs">
                    <button class="tablinks text-[#AEAEAE]" onclick="openCity(event, 'All')"
                        id="defaultOpen">All</button>
                    <button class="tablinks text-[#AEAEAE]" onclick="openCity(event, 'Images')">Images</button>
                    <button class="tablinks text-[#AEAEAE]" onclick="openCity(event, 'Videos')">Videos</button>
                </div>
                <div id="Gallery of Our Experience">
                    <div id="All" class="tabcontent">
                    <div class="gallary-of-all gap-3">
                            <div class="div1">
                                <img src="https://images.unsplash.com/photo-1616016757924-02e7091bb0f5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDR8Ym84alFLVGFFMFl8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60"
                                    alt="Gallery of Our Experience" class="w-full h-full">
                            </div>
                            <div class="div2">
                                <img src="https://images.unsplash.com/photo-1616016757924-02e7091bb0f5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDR8Ym84alFLVGFFMFl8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60"
                                    alt="Gallery of Our Experience" class="w-full h-full">
                            </div>
                            <div class="div3">
                                <img src="https://images.unsplash.com/photo-1616016757924-02e7091bb0f5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDR8Ym84alFLVGFFMFl8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60"
                                    alt="Gallery of Our Experience" class="w-full h-full">
                            </div>
                            <div class="div4">
                                <img src="https://images.unsplash.com/photo-1616016757924-02e7091bb0f5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDR8Ym84alFLVGFFMFl8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60"
                                    alt="Gallery of Our Experience" class="w-full h-full">
                            </div>
                            <div class="div5">
                                <img src="https://images.unsplash.com/photo-1616016757924-02e7091bb0f5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDR8Ym84alFLVGFFMFl8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60"
                                    alt="Gallery of Our Experience" class="w-full h-full">
                            </div>
                            <div class="div6"> <img
                                    src="https://images.unsplash.com/photo-1616016757924-02e7091bb0f5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDR8Ym84alFLVGFFMFl8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60"
                                    alt="Gallery of Our Experience" class="w-full h-full"> </div>
                            <div class="div7"> <img
                                    src="https://images.unsplash.com/photo-1616016757924-02e7091bb0f5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDR8Ym84alFLVGFFMFl8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60"
                                    alt="Gallery of Our Experience" class="w-full h-full"></div>
                            <div class="div8"> <img
                                    src="https://images.unsplash.com/photo-1616016757924-02e7091bb0f5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDR8Ym84alFLVGFFMFl8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60"
                                    alt="Gallery of Our Experience" class="w-full h-full"> </div>
                    </div>
                    </div>
                    <div id="Images" class="tabcontent flex flex-row text-white gap-3">
                        <div class="flex-1">
                            <img src="https://images.unsplash.com/photo-1616016757924-02e7091bb0f5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDR8Ym84alFLVGFFMFl8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60"
                            alt="Gallery of Our Experience" class="object-cover">
                        </div>
                        <div class="flex-1">
                            <img src="https://images.unsplash.com/photo-1616016757924-02e7091bb0f5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDR8Ym84alFLVGFFMFl8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60"
                            alt="Gallery of Our Experience" class="object-cover">
                        </div>
                        <div class="flex-1">
                            <img src="https://images.unsplash.com/photo-1616016757924-02e7091bb0f5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDR8Ym84alFLVGFFMFl8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60"
                            alt="Gallery of Our Experience" class="object-cover">
                        </div>
                    </div>

                    <div id="Videos" class="tabcontent flex flex-row text-white gap-3">
                        <div class="flex-1">
                            <img src="https://images.unsplash.com/photo-1616016757924-02e7091bb0f5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDR8Ym84alFLVGFFMFl8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60"
                            alt="Gallery of Our Experience" class="object-cover">
                        </div>
                        <div class="flex-1">
                            <img src="https://images.unsplash.com/photo-1616016757924-02e7091bb0f5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDR8Ym84alFLVGFFMFl8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60"
                            alt="Gallery of Our Experience" class="object-cover">
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">  
                    <button
                    class="bg-[#FFC66A] rounded-[4rem] px-4 py-[0.5rem] font-semibold text-black text-sm">View More</button>    
                </div>
            </div>
        </div>
    </div>
        <div class="py-[3.2rem] subscribe-bg mt-5" id="newsletter">
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