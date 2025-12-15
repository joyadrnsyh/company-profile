<?php

namespace App\Livewire\Front\Pages;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.front')]
class Home extends Component
{
    public function render()
    {
        return view('livewire.front.pages.home');
    }
}
