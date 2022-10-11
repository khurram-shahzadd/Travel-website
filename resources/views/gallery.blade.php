@include('partials/header')
<section>
    <div class="about-us-banner h-[100vh] flex justify-center items-center flex-col">
        <div class="text-center text-white pb-2 mt-[2rem]">
            <h2 class="text-6xl font-bold">Gallery</h2>
        </div>
        <div class="flex text-white flex-row gap-2 items-center text-[12px] sm:text-[14px] lg:text-xl">
            <a href="/">Home</a>
            <svg width="11" height="16" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 9L2.222 0L0 2.2782L6.556 9L0 15.7218L2.222 18L11 9Z" fill="white" />
            </svg>
            <span><a href="/gallary">Gallery</a></span>
        </div>
    </div>
</section>
<section class="bg-[#0D1118]">
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
    </div><br><br>
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