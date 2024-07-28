<?php

return [
    'projects' => [
        [
            'id' => 1,
            'name' => 'SubScribe',
            'description' => 'A web application used to manage subscriptions (netflix, spotify...)',
            'content' => <<<HTML
                <div class="space-y-[16px]">
                    <p>
                        The world went into shock when cyber security firm “Crowdstrike”, a provider of endpoint protection software, 
                        released an update on Friday, July 19th 2024 that wrecked millions of Windows computers worldwide. In this article, 
                        I’ll dive into what exactly happened, how this should’ve never happened and why we already know that 3rd party 
                        endpoint protection software itself is a dangerous security threat
                    </p>
                    <img src="{{Vite::asset('resources/assets/blog-images/center-div.svg')}}" class="w-[519px] h-[210px]" alt="">
                    <p>
                        The world went into shock when cyber security firm “Crowdstrike”, a provider of endpoint protection software, 
                        released an update on Friday, July 19th 2024 that wrecked millions of Windows computers worldwide. In this article, 
                        I’ll dive into what exactly happened, how this should’ve never happened and why we already know that 3rd party 
                        endpoint protection software itself is a dangerous security threat
                    </p>
                </div>
            HTML,
            'imagePath' => "resources/assets/project-images/subscribe.svg"


        ],

        [
            'id' => 2,
            'name' => 'Linkify',
            'description' => 'For sharing football streaming chanel with my friends',
            'content' => <<<HTML
                <div class="space-y-[16px]">
                    <p>
                        The world went into shock when cyber security firm “Crowdstrike”, a provider of endpoint protection software, 
                        released an update on Friday, July 19th 2024 that wrecked millions of Windows computers worldwide. In this article, 
                        I’ll dive into what exactly happened, how this should’ve never happened and why we already know that 3rd party 
                        endpoint protection software itself is a dangerous security threat
                    </p>
                    <img src="{{Vite::asset('resources/assets/blog-images/center-div.svg')}}" class="w-[519px] h-[210px]" alt="">
                    <p>
                        The world went into shock when cyber security firm “Crowdstrike”, a provider of endpoint protection software, 
                        released an update on Friday, July 19th 2024 that wrecked millions of Windows computers worldwide. In this article, 
                        I’ll dive into what exactly happened, how this should’ve never happened and why we already know that 3rd party 
                        endpoint protection software itself is a dangerous security threat
                    </p>
                </div>
            HTML,
            'imagePath' => "resources/assets/project-images/linkify.svg"
        ],

        
    ],
];