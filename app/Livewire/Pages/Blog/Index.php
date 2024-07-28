<?php

namespace App\Livewire\Pages\Blog;

use Livewire\Component;

class Index extends Component
{
    public $article;


    public function render()
    {
        return view('livewire.pages.blog.index');
    }
}
