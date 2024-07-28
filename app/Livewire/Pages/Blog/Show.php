<?php

namespace App\Livewire\Pages\Blog;

use Livewire\Component;

class Show extends Component
{

    public $article;

    public function mount($id)
    {
        $articles = config('articles.articles');
        $this->article = collect($articles)->firstWhere('id', $id);
    }

    public function render()
    {
        return view('livewire.pages.blog.show', ['article' => $this->article])->layout('layouts.app');
    }
}
