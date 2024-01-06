<?php

namespace App\Livewire\Story;

use App\Models\Story;
use Livewire\Component;

class StoryIndex extends Component
{
    public $stories;

    public function mount(){
        $this->stories = Story::get();
    }

    public function render()
    {
        return view('livewire.story.story-index');
    }
}
