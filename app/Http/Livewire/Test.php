<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Test extends Component
{
    public $message;
    public $result;

    public function render()
    {
        return view('livewire.test');
    }

    public function convert()
    {
        $this->result = strtolower($this->message);
    }
}
