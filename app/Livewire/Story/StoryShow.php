<?php

namespace App\Livewire\Story;

use App\Models\Story;
use Livewire\Component;

class StoryShow extends Component
{
    public Story $story;

    public function mount(Story $story){
        $this->story = $story ;


    }


    public function render()
    {
        return view('livewire.story.story-show');
    }
}
