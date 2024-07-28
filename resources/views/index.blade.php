<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="px-4">
    <div class="max-w-[966px] w-full mx-auto flex justify-between py-[40px] max-lg:flex-col max-lg:max-w-fit max-lg:space-y-[40px] ">
        <div class="max-w-[353px] space-y-[22px]">
            <div class="flex space-x-[11px] items-center">
                <img src="{{ Vite::asset('resources/assets/profile-pic.png') }}" alt="" class="w-[54px] h-[56px] rounded-[10px]">
                <h1 class="text-[22px] text-black font-medium leading-[130%]">Hello, my name is Christian Ludovic!</h1>
            </div>
            <p class="text-primary">I am a Software engineer student & junior Frontend Developer based in Turkey. I'm available for freelance or part-time jobs, remote or on-site in Trabzon and the surrounding area.</p>
            <div class="flex space-x-[10px] items-center">
                @livewire('components.button', ['class' => 'bg-primary text-white font-semibold', 'slot' => 'Get in Touch'])
                @livewire('components.button', ['class' => 'text-primary font-semibold', 'slot' => 'Buy me a coffee'])
            </div>
            <div class="flex justify-between">
                <div class="flex items-center space-x-[4.5px]">
                    <div class="flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                            <path d="M9.16314 1.45195H10.8499L7.16486 5.6637L11.5 11.3949H8.10562L5.44702 7.91897L2.40497 11.3949H0.717216L4.65872 6.89L0.5 1.45195H3.98055L6.3837 4.62912L9.16314 1.45195ZM8.57115 10.3853H9.50579L3.4727 2.40852H2.46973L8.57115 10.3853Z" fill="black"/>
                        </svg>
                    </div>
                    <span>Twitter</span>
                </div>
                <div class="flex items-center space-x-[4.5px]">
                    <div class="flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                            <path d="M7.00003 0.710728C3.13452 0.710728 0 3.82728 0 7.67187C0 10.7475 2.00572 13.3568 4.78706 14.2773C5.13689 14.3417 5.26535 14.1263 5.26535 13.9424C5.26535 13.7765 5.25882 13.2281 5.25585 12.6464C3.30839 13.0675 2.89746 11.8251 2.89746 11.8251C2.57904 11.0205 2.12024 10.8065 2.12024 10.8065C1.48516 10.3745 2.16811 10.3833 2.16811 10.3833C2.87105 10.4325 3.24119 11.1007 3.24119 11.1007C3.86551 12.1649 4.87875 11.8572 5.2782 11.6794C5.341 11.2294 5.52245 10.9224 5.72261 10.7486C4.16785 10.5725 2.53336 9.97561 2.53336 7.30832C2.53336 6.54835 2.80682 5.92734 3.25464 5.43986C3.18195 5.2645 2.94237 4.55651 3.32244 3.59766C3.32244 3.59766 3.91025 3.41056 5.24795 4.31121C5.80628 4.15693 6.40513 4.07962 7.00003 4.077C7.59492 4.07962 8.19421 4.15693 8.75364 4.31121C10.0897 3.41056 10.6767 3.59766 10.6767 3.59766C11.0577 4.55651 10.818 5.2645 10.7454 5.43986C11.1942 5.92734 11.4658 6.5483 11.4658 7.30832C11.4658 9.98195 9.8282 10.5707 8.26948 10.743C8.52054 10.959 8.74426 11.3827 8.74426 12.0321C8.74426 12.9635 8.73613 13.7131 8.73613 13.9424C8.73613 14.1277 8.86213 14.3447 9.217 14.2764C11.9968 13.3549 14 10.7465 14 7.67187C14 3.82728 10.8659 0.710728 7.00003 0.710728Z" fill="#161614"/>
                            <path d="M2.62169 10.627C2.60632 10.6616 2.55153 10.672 2.50173 10.6483C2.45095 10.6256 2.4224 10.5784 2.43887 10.5437C2.45397 10.5081 2.50876 10.4981 2.55943 10.5221C2.61033 10.5447 2.63931 10.5923 2.62169 10.627ZM2.96602 10.9326C2.93265 10.9633 2.86737 10.949 2.82306 10.9004C2.77728 10.8519 2.76871 10.787 2.80259 10.7557C2.83701 10.725 2.90031 10.7393 2.94621 10.7879C2.99199 10.837 3.00089 10.9015 2.96597 10.9326L2.96602 10.9326ZM3.20226 11.3235C3.15933 11.3531 3.08917 11.3253 3.04585 11.2634C3.00297 11.2015 3.00297 11.1273 3.04678 11.0975C3.09026 11.0678 3.15933 11.0945 3.20325 11.156C3.24607 11.2189 3.24607 11.2932 3.2022 11.3235L3.20226 11.3235ZM3.60171 11.7762C3.56334 11.8182 3.48165 11.807 3.42181 11.7496C3.36065 11.6934 3.34357 11.6138 3.38206 11.5717C3.42087 11.5295 3.50306 11.5414 3.56334 11.5983C3.62411 11.6544 3.64267 11.7346 3.60177 11.7762H3.60171ZM4.11799 11.9291C4.10114 11.9836 4.02241 12.0083 3.94314 11.9852C3.86397 11.9613 3.81215 11.8975 3.82812 11.8424C3.84459 11.7875 3.92365 11.7617 4.00353 11.7865C4.08258 11.8102 4.13452 11.8736 4.11805 11.9291H4.11799ZM4.70564 11.9939C4.70762 12.0513 4.64037 12.0989 4.55714 12.1C4.47342 12.1018 4.40573 12.0553 4.40485 11.9988C4.40485 11.9409 4.47056 11.8937 4.55423 11.8923C4.63746 11.8907 4.70564 11.9368 4.70564 11.9939ZM5.28286 11.9719C5.29286 12.0279 5.23499 12.0854 5.15237 12.1007C5.07111 12.1155 4.9959 12.0809 4.98553 12.0254C4.97542 11.9679 5.03439 11.9105 5.11547 11.8956C5.19826 11.8812 5.27232 11.9149 5.28286 11.9719Z" fill="#161614"/>
                        </svg>
                    </div>
                    <span>Github</span>
                </div>
                <div class="flex items-center space-x-[4.5px]">
                    <div class="flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                            <path d="M8.90684 0.811039H2.97298C1.33364 0.811039 0 2.14507 0 3.78489V9.21511C0 10.8549 1.33364 12.189 2.97298 12.189H8.90684C10.5462 12.189 11.8798 10.8549 11.8798 9.21511V3.78489C11.8798 2.14507 10.5462 0.811039 8.90684 0.811039ZM1.04877 3.78489C1.04877 2.72371 1.91211 1.86011 2.97298 1.86011H8.90684C9.96771 1.86011 10.831 2.72371 10.831 3.78489V9.21511C10.831 10.2763 9.96771 11.1399 8.90684 11.1399H2.97298C1.91211 11.1399 1.04877 10.2763 1.04877 9.21511V3.78489Z" fill="#161614"/>
                            <path d="M5.93994 9.26551C7.46439 9.26551 8.70531 8.0249 8.70531 6.49933C8.70531 4.97376 7.46506 3.73315 5.93994 3.73315C4.41482 3.73315 3.17456 4.97376 3.17456 6.49933C3.17456 8.0249 4.41482 9.26551 5.93994 9.26551ZM5.93994 4.78289C6.88659 4.78289 7.65654 5.55307 7.65654 6.5C7.65654 7.44693 6.88659 8.21711 5.93994 8.21711C4.99329 8.21711 4.22333 7.44693 4.22333 6.5C4.22333 5.55307 4.99329 4.78289 5.93994 4.78289Z" fill="#161614"/>
                            <path d="M8.9614 4.18006C9.3719 4.18006 9.70649 3.84606 9.70649 3.43476C9.70649 3.02346 9.37258 2.68944 8.9614 2.68944C8.55022 2.68944 8.21631 3.02346 8.21631 3.43476C8.21631 3.84606 8.55022 4.18006 8.9614 4.18006Z" fill="#161614"/>
                        </svg>
                    </div>
                    <span>Instagram</span>
                </div>
                <div class="flex items-center space-x-[4.5px]">
                    <div class="flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                            <g clip-path="url(#clip0_7_181)">
                                <path d="M11.994 0.499998H1.76572C1.53078 0.499998 1.30546 0.593327 1.13934 0.759453C0.973212 0.925579 0.879883 1.15089 0.879883 1.38583V11.6142C0.879883 11.8491 0.973212 12.0744 1.13934 12.2405C1.30546 12.4067 1.53078 12.5 1.76572 12.5H11.994C12.229 12.5 12.4543 12.4067 12.6204 12.2405C12.7866 12.0744 12.8799 11.8491 12.8799 11.6142V1.38583C12.8799 1.15089 12.7866 0.925579 12.6204 0.759453C12.4543 0.593327 12.229 0.499998 11.994 0.499998ZM4.45655 10.7225H2.65238V4.99166H4.45655V10.7225ZM3.55322 4.1975C3.34856 4.19635 3.14884 4.1346 2.97925 4.02004C2.80966 3.90549 2.6778 3.74326 2.60032 3.55384C2.52284 3.36442 2.50321 3.15629 2.5439 2.95573C2.58459 2.75516 2.68378 2.57114 2.82896 2.42689C2.97414 2.28264 3.15879 2.18463 3.35962 2.14523C3.56044 2.10583 3.76844 2.12679 3.95736 2.20549C4.14628 2.28419 4.30765 2.41708 4.42112 2.5874C4.53458 2.75773 4.59504 2.95784 4.59488 3.1625C4.59681 3.29952 4.57114 3.43552 4.51939 3.5624C4.46764 3.68928 4.39087 3.80445 4.29367 3.90103C4.19646 3.99761 4.08081 4.07364 3.95359 4.12457C3.82638 4.17551 3.69022 4.20031 3.55322 4.1975ZM11.1066 10.7275H9.30322V7.59667C9.30322 6.67333 8.91072 6.38833 8.40405 6.38833C7.86905 6.38833 7.34405 6.79167 7.34405 7.62V10.7275H5.53988V4.99583H7.27488V5.79H7.29822C7.47238 5.4375 8.08238 4.835 9.01322 4.835C10.0199 4.835 11.1074 5.4325 11.1074 7.1825L11.1066 10.7275Z" fill="#161614"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_7_181">
                                    <rect width="12" height="12" fill="white" transform="translate(0.879883 0.5)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <span>Linkedin</span>
                </div>
            </div>
        </div>
        <div class="space-y-[15px]">
            <div class="flex space-x-[15px] max-sm:flex-col max-sm:space-x-0 max-sm:space-y-[15px]">
                <div class="space-y-[15px]">
                    @livewire('components.card1', ['cardname' => 'Experience', 'cardSize' => 'max-w-[311px] max-sm:max-w-full'])
                    @livewire('components.card1', ['cardname' => 'Currently Building', 'cardSize' => 'max-w-[311px] max-sm:max-w-full'])
                </div>
                @livewire('components.card1', ['cardname' => 'Techstack', 'cardSize' => 'max-w-[229px] max-sm:max-w-full'])
            </div>
            <div class="flex space-x-[15px] max-sm:flex-col max-sm:space-x-0 max-sm:space-y-[15px]">
                @livewire('components.current-read-card')
                <div class="border-2 border-primary bg-gray space-y-3 px-[18px] py-[14px] rounded-[10px] max-w-[269px] w-full max-sm:max-w-full">
                    <div class="w-full flex justify-between items-center">
                        <h2 class="text-[15px] font-medium text-primary">My Blog</h2>
                        <a href="/blog" class="text-[#535252] underline text-[15px]">see all</a>
                    </div>
                    <div class="space-y-5">
                        <a href="/blog/1" class="block">
                            <div class="flex space-x-[14px] items-center">
                                <img src="{{ Vite::asset('resources/assets/blog-images/center-div.svg') }}" alt="" class="h-[48px] w-[48px] rounded-[3px]">
                                <div class="w-full">
                                    <h3 class="text-primary font-medium text-[14x]">How to center a div</h3>
                                    <p class="text-[12px] text-secondary italic">Published on April 12, 2024</p>
                                </div>
                            </div>
                        </a>
                        <a href="/blog/2" class="block">
                            <div class="flex space-x-[14px] items-center">
                                <img src="{{ Vite::asset('resources/assets/blog-images/center-div.svg') }}" alt="" class="h-[48px] w-[48px] rounded-[3px]">
                                <div class="w-full">
                                    <h3 class="text-primary font-medium text-[14x]">How to center a div</h3>
                                    <p class="text-[12px] text-secondary italic">Published on April 12, 2024</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                </div>
            </div>
            @livewire('components.card1', ['cardname' => 'Currently Building', 'cardSize' => 'max-w-[555px]'])
        </div>
    </div>
    @livewireScripts
    @vite('resources/js/app.js')
</body>
</html>