@include('partials/header')
<section>
    <div class="view-activity-banner h-[100vh] flex justify-center items-center flex-col">
        <div class="text-center text-white pb-2 mt-[2rem] ">
            <h2 class="text-6xl font-bold">Balloon Adventure</h2>
        </div>
        <div class="flex text-white flex-col md:flex-row gap-2 items-center text-[12px] sm:text-[14px] lg:text-xl">
            <a href="/">Home</a>
            <svg width="11" height="16" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 9L2.222 0L0 2.2782L6.556 9L0 15.7218L2.222 18L11 9Z" fill="white" />
            </svg>
            <span><a href="/our-partners">Partners</a></span>
            <svg width="11" height="16" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 9L2.222 0L0 2.2782L6.556 9L0 15.7218L2.222 18L11 9Z" fill="white" />
            </svg>
            <span><a href="/explore-partner">Balloon Adventure</a></span>
            <svg width="11" height="16" viewBox="0 0 11 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 9L2.222 0L0 2.2782L6.556 9L0 15.7218L2.222 18L11 9Z" fill="white" />
            </svg>
            <span><a href="/explore-partner">Private Couple Hot Air Balloon Adventure</a></span>
        </div>
    </div>
</section>
<section class="bg-[#0D1118]">
    <div class="container mx-auto  md:w-[85%] lg:w-[74%] w-[90%] py-[1rem]" id='who_we_are'>
        <div class="grid grid-flow-cols-1 lg:grid-cols-2 xl:grid-cols-4 gap-2 md:gap-3">
            <div class="flex flex-row gap-2 ">
                <div
                    class="border border-[#938ACC] bg-[#938ACC77] rounded-full h-[40px] w-[40px] flex justify-center items-center">
                    <svg width="19" height="19" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M21.4356 25.1313C22.4157 25.1313 23.3558 24.742 24.0489 24.0489C24.742 23.3558 25.1313 22.4157 25.1313 21.4356C25.1313 20.4554 24.742 19.5153 24.0489 18.8223C23.3558 18.1292 22.4157 17.7398 21.4356 17.7398C20.4554 17.7398 19.5153 18.1292 18.8223 18.8223C18.1292 19.5153 17.7398 20.4554 17.7398 21.4356C17.7398 22.4157 18.1292 23.3558 18.8223 24.0489C19.5153 24.742 20.4554 25.1313 21.4356 25.1313ZM21.4356 26.6097C22.8078 26.6097 24.1239 26.0645 25.0942 25.0942C26.0645 24.1239 26.6097 22.8078 26.6097 21.4356C26.6097 20.0633 26.0645 18.7473 25.0942 17.7769C24.1239 16.8066 22.8078 16.2615 21.4356 16.2615C20.0633 16.2615 18.7473 16.8066 17.7769 17.7769C16.8066 18.7473 16.2615 20.0633 16.2615 21.4356C16.2615 22.8078 16.8066 24.1239 17.7769 25.0942C18.7473 26.0645 20.0633 26.6097 21.4356 26.6097V26.6097Z"
                            fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M21.4354 18.8485C21.6315 18.8485 21.8195 18.9264 21.9581 19.065C22.0967 19.2036 22.1746 19.3917 22.1746 19.5877V21.1296L22.6972 21.6522C22.8318 21.7916 22.9063 21.9783 22.9046 22.1721C22.903 22.3659 22.8252 22.5513 22.6882 22.6883C22.5511 22.8254 22.3657 22.9031 22.1719 22.9048C21.9781 22.9065 21.7914 22.832 21.652 22.6973L20.6963 21.7416V19.5877C20.6963 19.3917 20.7742 19.2036 20.9128 19.065C21.0514 18.9264 21.2394 18.8485 21.4354 18.8485ZM5.91317 12.5657H4.43485V14.044H5.91317V12.5657ZM4.43485 11.0874C4.04278 11.0874 3.66677 11.2432 3.38953 11.5204C3.11229 11.7976 2.95654 12.1736 2.95654 12.5657V14.044C2.95654 14.4361 3.11229 14.8121 3.38953 15.0893C3.66677 15.3666 4.04278 15.5223 4.43485 15.5223H5.91317C6.30524 15.5223 6.68125 15.3666 6.95849 15.0893C7.23573 14.8121 7.39148 14.4361 7.39148 14.044V12.5657C7.39148 12.1736 7.23573 11.7976 6.95849 11.5204C6.68125 11.2432 6.30524 11.0874 5.91317 11.0874H4.43485ZM11.8264 12.5657H10.3481V14.044H11.8264V12.5657ZM10.3481 11.0874C9.95603 11.0874 9.58001 11.2432 9.30278 11.5204C9.02554 11.7976 8.86979 12.1736 8.86979 12.5657V14.044C8.86979 14.4361 9.02554 14.8121 9.30278 15.0893C9.58001 15.3666 9.95603 15.5223 10.3481 15.5223H11.8264C12.2185 15.5223 12.5945 15.3666 12.8717 15.0893C13.149 14.8121 13.3047 14.4361 13.3047 14.044V12.5657C13.3047 12.1736 13.149 11.7976 12.8717 11.5204C12.5945 11.2432 12.2185 11.0874 11.8264 11.0874H10.3481ZM17.7397 12.5657H16.2613V14.044H17.7397V12.5657ZM16.2613 11.0874C15.8693 11.0874 15.4933 11.2432 15.216 11.5204C14.9388 11.7976 14.783 12.1736 14.783 12.5657V14.044C14.783 14.4361 14.9388 14.8121 15.216 15.0893C15.4933 15.3666 15.8693 15.5223 16.2613 15.5223H17.7397C18.1317 15.5223 18.5077 15.3666 18.785 15.0893C19.0622 14.8121 19.218 14.4361 19.218 14.044V12.5657C19.218 12.1736 19.0622 11.7976 18.785 11.5204C18.5077 11.2432 18.1317 11.0874 17.7397 11.0874H16.2613ZM5.91317 18.479H4.43485V19.9573H5.91317V18.479ZM4.43485 17.0006C4.04278 17.0006 3.66677 17.1564 3.38953 17.4336C3.11229 17.7109 2.95654 18.0869 2.95654 18.479V19.9573C2.95654 20.3493 3.11229 20.7254 3.38953 21.0026C3.66677 21.2798 4.04278 21.4356 4.43485 21.4356H5.91317C6.30524 21.4356 6.68125 21.2798 6.95849 21.0026C7.23573 20.7254 7.39148 20.3493 7.39148 19.9573V18.479C7.39148 18.0869 7.23573 17.7109 6.95849 17.4336C6.68125 17.1564 6.30524 17.0006 5.91317 17.0006H4.43485ZM11.8264 18.479H10.3481V19.9573H11.8264V18.479ZM10.3481 17.0006C9.95603 17.0006 9.58001 17.1564 9.30278 17.4336C9.02554 17.7109 8.86979 18.0869 8.86979 18.479V19.9573C8.86979 20.3493 9.02554 20.7254 9.30278 21.0026C9.58001 21.2798 9.95603 21.4356 10.3481 21.4356H11.8264C12.2185 21.4356 12.5945 21.2798 12.8717 21.0026C13.149 20.7254 13.3047 20.3493 13.3047 19.9573V18.479C13.3047 18.0869 13.149 17.7109 12.8717 17.4336C12.5945 17.1564 12.2185 17.0006 11.8264 17.0006H10.3481Z"
                            fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M1.47831 4.435C1.47831 4.23896 1.55619 4.05095 1.6948 3.91233C1.83342 3.77372 2.02143 3.69584 2.21747 3.69584H5.91324V2.21753H2.21747C1.62936 2.21753 1.06534 2.45115 0.649481 2.86701C0.233625 3.28287 0 3.84689 0 4.435V22.1747C0 22.7628 0.233625 23.3269 0.649481 23.7427C1.06534 24.1586 1.62936 24.3922 2.21747 24.3922H17.1891C16.8738 23.9407 16.633 23.4416 16.4758 22.9139H2.21747C2.02143 22.9139 1.83342 22.836 1.6948 22.6974C1.55619 22.5588 1.47831 22.3708 1.47831 22.1747V4.435ZM20.6964 16.3132C21.1866 16.2431 21.6844 16.2431 22.1747 16.3132V4.435C22.1747 3.84689 21.941 3.28287 21.5252 2.86701C21.1093 2.45115 20.5453 2.21753 19.9572 2.21753H17.7397V3.69584H19.9572C20.1532 3.69584 20.3412 3.77372 20.4799 3.91233C20.6185 4.05095 20.6964 4.23896 20.6964 4.435V16.3132ZM7.39156 3.69584H15.1993V2.21753H7.39156V3.69584Z"
                            fill="white"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M22.1749 8.86991H1.47852V7.3916H22.1749V8.86991Z" fill="white"></path>
                        <path
                            d="M4.43506 0.739034C4.43506 0.542997 4.51293 0.35499 4.65155 0.216372C4.79017 0.0777532 4.97818 -0.00012207 5.17421 -0.00012207C5.37025 -0.00012207 5.55826 0.0777532 5.69688 0.216372C5.83549 0.35499 5.91337 0.542997 5.91337 0.739034V3.69566C5.91337 3.89169 5.83549 4.0797 5.69688 4.21832C5.55826 4.35694 5.37025 4.43481 5.17421 4.43481C4.97818 4.43481 4.79017 4.35694 4.65155 4.21832C4.51293 4.0797 4.43506 3.89169 4.43506 3.69566V0.739034ZM14.7832 0.739034C14.7832 0.542997 14.8611 0.35499 14.9997 0.216372C15.1383 0.0777532 15.3264 -0.00012207 15.5224 -0.00012207C15.7184 -0.00012207 15.9064 0.0777532 16.0451 0.216372C16.1837 0.35499 16.2615 0.542997 16.2615 0.739034V3.69566C16.2615 3.89169 16.1837 4.0797 16.0451 4.21832C15.9064 4.35694 15.7184 4.43481 15.5224 4.43481C15.3264 4.43481 15.1383 4.35694 14.9997 4.21832C14.8611 4.0797 14.7832 3.89169 14.7832 3.69566V0.739034Z"
                            fill="white"></path>
                    </svg>
                </div>
                <span class="text-white  self-center text-[13px]">Operating 1st Oct - 15th May</span>
            </div>
            <div class="flex flex-row gap-2 ">
                <div
                    class="border border-[#8ACCB4] bg-[#8ACCB477] rounded-full h-[40px] w-[40px] flex justify-center items-center">
                    <svg width="30" height="21" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M27.6855 12.0703H20.1855C20.0566 12.0703 19.9512 12.1758 19.9512 12.3047V13.7109C19.9512 13.8398 20.0566 13.9453 20.1855 13.9453H27.6855C27.8145 13.9453 27.9199 13.8398 27.9199 13.7109V12.3047C27.9199 12.1758 27.8145 12.0703 27.6855 12.0703ZM23.7598 16.0547H20.1855C20.0566 16.0547 19.9512 16.1602 19.9512 16.2891V17.6953C19.9512 17.8242 20.0566 17.9297 20.1855 17.9297H23.7598C23.8887 17.9297 23.9941 17.8242 23.9941 17.6953V16.2891C23.9941 16.1602 23.8887 16.0547 23.7598 16.0547ZM13.9834 9.44824H12.7148C12.5332 9.44824 12.3867 9.59473 12.3867 9.77637V17.042C12.3867 17.1475 12.4365 17.2441 12.5215 17.3057L16.8838 20.4873C17.0303 20.5928 17.2354 20.5635 17.3408 20.417L18.0937 19.3887V19.3857C18.1992 19.2393 18.167 19.0342 18.0205 18.9287L14.3086 16.2451V9.77637C14.3115 9.59473 14.1621 9.44824 13.9834 9.44824Z"
                            fill="white" />
                        <path
                            d="M23.5781 19.7432H21.8848C21.7207 19.7432 21.5655 19.8281 21.4776 19.9688C21.1055 20.5576 20.6719 21.1025 20.1738 21.6006C19.3155 22.459 18.3164 23.1328 17.2061 23.6016C16.0547 24.0879 14.833 24.334 13.5733 24.334C12.3106 24.334 11.0889 24.0879 9.94045 23.6016C8.8301 23.1328 7.83108 22.459 6.97268 21.6006C6.11428 20.7422 5.44045 19.7432 4.9717 18.6328C4.48537 17.4844 4.23928 16.2627 4.23928 15C4.23928 13.7373 4.48537 12.5186 4.9717 11.3672C5.44045 10.2568 6.11428 9.25782 6.97268 8.39942C7.83108 7.54102 8.8301 6.8672 9.94045 6.39845C11.0889 5.91212 12.3135 5.66602 13.5733 5.66602C14.836 5.66602 16.0576 5.91212 17.2061 6.39845C18.3164 6.8672 19.3155 7.54102 20.1738 8.39942C20.6719 8.89747 21.1055 9.44239 21.4776 10.0313C21.5655 10.1719 21.7207 10.2568 21.8848 10.2568H23.5781C23.7803 10.2568 23.9092 10.0459 23.8184 9.8672C21.9082 6.06739 18.0352 3.59766 13.711 3.54786C7.3799 3.46876 2.12111 8.65138 2.1094 14.9766C2.09768 21.3135 7.23342 26.4551 13.5703 26.4551C17.9502 26.4551 21.8877 23.9766 23.8184 20.1328C23.9092 19.9541 23.7774 19.7432 23.5781 19.7432Z"
                            fill="white" />
                    </svg>
                </div>
                <span class="text-white  self-center text-[13px] ">Morning</span>
            </div>
            <div class="flex flex-row gap-2 ">
                <div
                    class="border border-[#CC8A8A] bg-[#CC8A8A77] rounded-full h-[40px] w-[40px] flex justify-center items-center">
                    <svg width="15" height="21" viewBox="0 0 15 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.1445 4.58696C11.6395 4.89998 12.8661 5.53379 13.9188 6.44611C14.2172 6.7047 14.2525 7.17032 14.0002 7.47694L12.7154 9.03855C12.4765 9.32894 12.0622 9.37804 11.7634 9.15448C10.6071 8.28903 9.40854 7.87625 8.03236 7.87625C6.4515 7.87625 5.45619 8.5724 5.45619 9.8132C5.45619 11.0842 6.18805 11.5988 9.20346 12.5673C12.8921 13.7779 15 15.3819 15 19.0743C15 22.0024 13.2088 24.2499 10.1015 25.0933C9.7949 25.1766 9.58392 25.4676 9.58392 25.7953V29.2707C9.58392 29.6735 9.26806 30 8.87847 30H6.92275C6.5331 30 6.21729 29.6735 6.21729 29.2707V26.0542C6.21729 25.6917 5.95985 25.3803 5.61214 25.3331C3.4051 25.0335 1.68994 24.1692 0.404769 23.0601C0.0987066 22.7959 -0.155108 22.5772 0.113214 22.2724L1.86918 20.2777C2.25593 19.8384 2.44265 20.0571 2.73217 20.2886C3.98968 21.2939 5.41743 21.8588 7.09559 21.8588C8.99843 21.8588 10.1403 20.9509 10.1403 19.4375C10.1403 17.9848 9.43749 17.3189 6.62717 16.411C2.23587 15.0188 0.684198 13.1424 0.684198 10.1764C0.684198 7.2647 2.68956 5.21457 5.66864 4.55931C5.99039 4.48854 6.21729 4.57056 6.21729 4.23043V0.3266C6.21729 -0.0762203 6.53316 0.00714395 6.92275 0.00714395H8.87847C9.26811 0.00714395 9.58392 0.333688 9.58392 0.736449V3.87523C9.58392 4.21982 9.81779 4.5186 10.1445 4.58696Z"
                            fill="white" />
                    </svg>
                </div>
                <span class="text-white  self-center text-[13px]">AED 12,950</span>
            </div>
            <div class="flex flex-row gap-2 ">
                <button class="bg-[#FFC66A] rounded-lg px-4 py-[0.35rem] font-semibold text-black w-max">Contact
                    Now</button>
            </div>
        </div>
    </div>
</section>
<section class="bg-[#0D1118]">
    <div class="bg-[#202022]">
        <div class="container mx-auto md:pt-[2rem] lg:pt-[4rem] pt-[2rem] md:w-[85%] lg:w-[74%] w-[90%]"
            id='who_we_are'>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 relative">
                <div class="flex flex-col gap-3">
                    <h1
                        class="text-white font-bold leading-[1.4] md:text-[2rem] pb-[1rem] text-[1rem] md:text-left text-center">
                        Private Couple Hot <br>
                        Air Balloon Adventure
                    </h1>
                    <p class="text-white">
                        Hot Air Ballooning is one of the most romantic things to do in Dubai, and flying in your very
                        own private balloon basket with that special someone is even better. Watching the sunrise over
                        the desert is a breath-taking experience like no other! After the romantic Hot Air Balloon ride,
                        enjoy a private gourmet breakfast at an exclusive desert oasis setting and embark on a wildlife
                        drive in the Dubai Desert Conservation Reserve.
                    </p>
                </div>
                <div class="flex flex-1 relative">
                    <img src="{{asset('images/ballown-video.png')}}"
                        class="object-cover translate-y-[-10px] md:translate-y-10">
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto md:pt-[2rem] lg:pt-[6rem] pt-[2rem] md:w-[85%] lg:w-[74%] w-[90%]" id='who_we_are'>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 relative">
            <div class="flex flex-1 relative">
                <img src="{{asset('images/activity-1.png')}}" class="object-cover rounded-lg">
            </div>
            <div class="flex flex-col gap-3">
                <h1
                    class="text-white font-bold leading-[1.4] md:text-[2rem] pb-[1rem] text-[1rem] md:text-left text-center">
                    Pickup in luxury Range<br>
                    Rover.
                </h1>
                <p class="text-white">
                    Hot Air Ballooning is one of the most romantic things to do in Dubai, and flying in your very own
                    private balloon basket with that special someone is even better. Watching the sunrise over the
                    desert is a breath-taking experience like no other! After the romantic Hot Air Balloon ride, enjoy a
                    private gourmet breakfast at an exclusive desert oasis setting and embark on a wildlife drive in the
                    Dubai Desert Conservation Reserve.
                </p>
                <div class="flex flex-row gap-3">
                    <svg width="25" height="25" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M32.7995 11.9729C32.6969 11.6709 32.5082 11.4056 32.2566 11.2096C32.005 11.0137 31.7015 10.8957 31.3836 10.8702L22.0841 10.1313L18.0599 1.22327C17.9317 0.936359 17.7233 0.692672 17.4597 0.521617C17.1961 0.350562 16.8886 0.25945 16.5744 0.259278C16.2601 0.259105 15.9526 0.349879 15.6888 0.520645C15.425 0.69141 15.2163 0.934869 15.0878 1.22164L11.0636 10.1313L1.7641 10.8702C1.45166 10.895 1.15295 11.0092 0.903732 11.1993C0.654511 11.3894 0.465325 11.6472 0.358807 11.942C0.25229 12.2368 0.232951 12.556 0.303104 12.8615C0.373258 13.1669 0.529933 13.4457 0.754387 13.6645L7.62667 20.3639L5.19617 30.8884C5.12237 31.207 5.14602 31.5404 5.26406 31.8454C5.38209 32.1503 5.58907 32.4128 5.85811 32.5986C6.12716 32.7845 6.44587 32.8852 6.77287 32.8877C7.09987 32.8902 7.42006 32.7944 7.69191 32.6126L16.5738 26.6913L25.4558 32.6126C25.7336 32.7971 26.0613 32.8921 26.3947 32.8847C26.7282 32.8774 27.0514 32.7682 27.3209 32.5717C27.5904 32.3752 27.7932 32.1009 27.9022 31.7857C28.0112 31.4705 28.021 31.1295 27.9303 30.8085L24.9468 20.3688L32.346 13.7102C32.8305 13.273 33.0083 12.5912 32.7995 11.9729Z" fill="#FFC66A"/>
                    </svg>
                    <p class="text-[#FFC66A]">Highlight: Luxury Range Rover</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto md:pt-[2rem] lg:pt-[4rem] pt-[2rem] md:w-[85%] lg:w-[74%] w-[90%]" id='who_we_are'>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 relative">
            <div class="flex flex-col gap-3">
                <h1
                    class="text-white font-bold leading-[1.4] md:text-[2rem] pb-[1rem] text-[1rem] md:text-left text-center">
                    Take Off in the Desert
                </h1>
                <p class="text-white">
                    Hot Air Ballooning is one of the most romantic things to do in Dubai, and flying in your very own
                    private balloon basket with that special someone is even better. Watching the sunrise over the
                    desert is a breath-taking experience like no other! After the romantic Hot Air Balloon ride, enjoy a
                    private gourmet breakfast at an exclusive desert oasis setting and embark on a wildlife drive in the
                    Dubai Desert Conservation Reserve.
                </p>
                <div class="flex flex-row gap-3">
                    <svg width="25" height="25" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M32.7995 11.9729C32.6969 11.6709 32.5082 11.4056 32.2566 11.2096C32.005 11.0137 31.7015 10.8957 31.3836 10.8702L22.0841 10.1313L18.0599 1.22327C17.9317 0.936359 17.7233 0.692672 17.4597 0.521617C17.1961 0.350562 16.8886 0.25945 16.5744 0.259278C16.2601 0.259105 15.9526 0.349879 15.6888 0.520645C15.425 0.69141 15.2163 0.934869 15.0878 1.22164L11.0636 10.1313L1.7641 10.8702C1.45166 10.895 1.15295 11.0092 0.903732 11.1993C0.654511 11.3894 0.465325 11.6472 0.358807 11.942C0.25229 12.2368 0.232951 12.556 0.303104 12.8615C0.373258 13.1669 0.529933 13.4457 0.754387 13.6645L7.62667 20.3639L5.19617 30.8884C5.12237 31.207 5.14602 31.5404 5.26406 31.8454C5.38209 32.1503 5.58907 32.4128 5.85811 32.5986C6.12716 32.7845 6.44587 32.8852 6.77287 32.8877C7.09987 32.8902 7.42006 32.7944 7.69191 32.6126L16.5738 26.6913L25.4558 32.6126C25.7336 32.7971 26.0613 32.8921 26.3947 32.8847C26.7282 32.8774 27.0514 32.7682 27.3209 32.5717C27.5904 32.3752 27.7932 32.1009 27.9022 31.7857C28.0112 31.4705 28.021 31.1295 27.9303 30.8085L24.9468 20.3688L32.346 13.7102C32.8305 13.273 33.0083 12.5912 32.7995 11.9729Z" fill="#FFC66A"/>
                    </svg>
                    <p class="text-[#FFC66A]">Highlight: Hot air balloon inflation</p>
                </div>
            </div>
            <div class="flex flex-1 relative">
                <img src="{{asset('images/activity-dessert.png')}}" class="object-cover rounded-lg">
            </div>
        </div>
    </div>
    <div class="container mx-auto md:pt-[2rem] lg:pt-[4rem] pt-[2rem] md:w-[85%] lg:w-[74%] w-[90%]" id='who_we_are'>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 relative">
            
            <div class="flex flex-1 relative">
                <img src="{{asset('images/activity-food.png')}}" class="object-cover rounded-lg">
            </div>
            <div class="flex flex-col gap-3">
                <h1
                    class="text-white font-bold leading-[1.4] md:text-[2rem] pb-[1rem] text-[1rem] md:text-left text-center">
                    Take Off in the Desert
                </h1>
                <p class="text-white">
                    Hot Air Ballooning is one of the most romantic things to do in Dubai, and flying in your very own
                    private balloon basket with that special someone is even better. Watching the sunrise over the
                    desert is a breath-taking experience like no other! After the romantic Hot Air Balloon ride, enjoy a
                    private gourmet breakfast at an exclusive desert oasis setting and embark on a wildlife drive in the
                    Dubai Desert Conservation Reserve.
                </p>
                <div class="flex flex-row gap-3">
                    <svg width="25" height="25" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M32.7995 11.9729C32.6969 11.6709 32.5082 11.4056 32.2566 11.2096C32.005 11.0137 31.7015 10.8957 31.3836 10.8702L22.0841 10.1313L18.0599 1.22327C17.9317 0.936359 17.7233 0.692672 17.4597 0.521617C17.1961 0.350562 16.8886 0.25945 16.5744 0.259278C16.2601 0.259105 15.9526 0.349879 15.6888 0.520645C15.425 0.69141 15.2163 0.934869 15.0878 1.22164L11.0636 10.1313L1.7641 10.8702C1.45166 10.895 1.15295 11.0092 0.903732 11.1993C0.654511 11.3894 0.465325 11.6472 0.358807 11.942C0.25229 12.2368 0.232951 12.556 0.303104 12.8615C0.373258 13.1669 0.529933 13.4457 0.754387 13.6645L7.62667 20.3639L5.19617 30.8884C5.12237 31.207 5.14602 31.5404 5.26406 31.8454C5.38209 32.1503 5.58907 32.4128 5.85811 32.5986C6.12716 32.7845 6.44587 32.8852 6.77287 32.8877C7.09987 32.8902 7.42006 32.7944 7.69191 32.6126L16.5738 26.6913L25.4558 32.6126C25.7336 32.7971 26.0613 32.8921 26.3947 32.8847C26.7282 32.8774 27.0514 32.7682 27.3209 32.5717C27.5904 32.3752 27.7932 32.1009 27.9022 31.7857C28.0112 31.4705 28.021 31.1295 27.9303 30.8085L24.9468 20.3688L32.346 13.7102C32.8305 13.273 33.0083 12.5912 32.7995 11.9729Z" fill="#FFC66A"/>
                    </svg>
                    <p class="text-[#FFC66A]">Highlight: Hot air balloon inflation</p>
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