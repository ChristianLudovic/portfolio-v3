<?php

return [
    'articles' => [
        [
            'id' => 1,
            'title' => 'Inside The Outages: A Dangerous Null Pointer Exception',
            'preview' => 'The world went into shock when cyber security...',
            'content' => <<<HTML
                <div class="space-y-[16px]">
                    <p>
                        Je vais tenter, très humblement, d’apporter des éléments de réponse, basés sur de véritables situations. Je vais même aller un peu plus loin et parler des quelques moments où même Typescript ne pourra RIEN pour toi. C’est parti!
                    </p>
                    <h2 class="text-[18px] font-semibold">Posons un contexte</h2>
                    <p>Développeur ou développeuse junior dans une ESN qui te paie 28 000 (vingt huit mille) euros brut dans le centre de Paris, tu tentes malgré tout de joindre les deux bouts. Tu travailles sur une application e-commerce avec beaucoup de code existant, code étant le fruit du travail de 59 développeurs ou développeuses qui ont travaillé sur ce projet avant toi (ton ESN a un turnover de fou, mais les managers ne comprennent pas pourquoi!).</p>
                    <img src="http://192.168.1.111:3000/resources/assets/blog-images/article1/1.png" alt="image d'un truc" class=" rounded-[10px] block">
                    <p>
                        The world went into shock when cyber security firm “Crowdstrike”, a provider of endpoint protection software, 
                        released an update on Friday, July 19th 2024 that wrecked millions of Windows computers worldwide. In this article, 
                        I’ll dive into what exactly happened, how this should’ve never happened and why we already know that 3rd party 
                        endpoint protection software itself is a dangerous security threat
                    </p>
                </div>
            HTML,
            'imagePath' => "resources/assets/blog-images/center-div.svg",
            'date' => '2021-01-01',
        ],

        
    ],
];