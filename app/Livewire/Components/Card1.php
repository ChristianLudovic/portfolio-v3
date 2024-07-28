<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Card1 extends Component
{
    public $cardname;
    public $cardSize;
    public $displayData = [];

    public function mount($cardname)
    {
        $this->cardname = $cardname;
        $this->displayData = $this->getDataByCardName();
    }

    private function getDataByCardName()
    {
        switch ($this->cardname) {
            case 'Experience':
                return $this->experienceDatas;
            case 'Techstack':
                return $this->techStackDatas;
            case 'Currently Building':
                return $this->currentlyBuildingDatas;
            default:
                return [];
        }
    }

    public $experienceDatas = [
        [
            "0" => "Ejara",
            "1" => "Intern Product Designer",
            "2" => "resources/assets/experience-image/ejara.svg",
            "3" => "04 Months"
        ],
        [
            "0" => "Glom Sarl",
            "1" => "Web Designer",
            "2" => "resources/assets/experience-image/glom.svg",
            "3" => "08 Months"
        ]
    ];

    public $techStackDatas = [
        [
            "0" => "React",
            "1" => "Frontend",
            "2" => "resources/assets/stack-images/react.svg"
        ],

        [
            "0" => "Next",
            "1" => "Fullstack",
            "2" => "resources/assets/stack-images/next.svg"
        ],

        [
            "0" => "Tailwind",
            "1" => "CSS",
            "2" => "resources/assets/stack-images/tailwind.svg"
        ],

        [
            "0" => "Laravel",
            "1" => "Backend",
            "2" => "resources/assets/stack-images/laravel.svg"
        ],

        [
            "0" => "Livewire  ",
            "1" => "Frontend",
            "2" => "resources/assets/stack-images/livewire.svg"
        ],

        [
            "0" => "Figma",
            "1" => "Design",
            "2" => "resources/assets/stack-images/figma.svg"
        ],

    ];

    public $currentlyBuildingDatas = [
        [
            "0" => "Subscribe",
            "1" => "A web application used to manage subscriptions (netflix, spotify...)",
            "2" => "resources/assets/project-images/subscribe.svg"
        ],

        [
            "0" => "Linkify",
            "1" => "For sharing football streaming chanel with my friends",
            "2" => "resources/assets/project-images/linkify.svg"
        ]
    ];

    public function render()
    {
        return view('livewire.components.card1');
    }
}
