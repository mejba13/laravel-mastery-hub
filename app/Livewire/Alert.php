<?php

namespace App\Livewire;

use Livewire\Component;

class Alert extends Component
{
    // Properties for the message and type
    public $message;
    public $type = 'info'; // Default type

    // Constructor to initialize message and type dynamically
    public function mount($message, $type = 'info')
    {
        $this->message = $message;
        $this->type = $type;
    }

    public function render()
    {
        return view('livewire.alert');
    }
}
