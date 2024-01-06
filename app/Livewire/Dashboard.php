<?php

namespace App\Livewire;

use App\Models\Story;
use Livewire\Component;

class Dashboard extends Component
{

    public $stories;
    public function mount(){
        $this->stories = Story::get();
    }

    public function render()
    {
        return view('livewire.dashboard')
            ->title('Overview');
    }
}
