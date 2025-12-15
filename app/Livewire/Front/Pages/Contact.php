<?php

namespace App\Livewire\Front\Pages;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.front')]
class Contact extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';

    public function submit()
    {
        // Validation and logic would go here
        session()->flash('success', 'Message sent successfully!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.front.pages.contact');
    }
}
