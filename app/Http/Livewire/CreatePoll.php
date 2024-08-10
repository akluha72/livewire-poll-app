<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreatePoll extends Component
{
    public $title;
    public $options = ['initial', 'something'];
    public function render()
    {
        return view('livewire.create-poll');
    }

    public function addOption()
    {
        $this->options[] = '';

    }
    // public function mount()
    // {

    // }
}
