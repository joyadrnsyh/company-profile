<?php

namespace App\Livewire\Front\Pages;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.front')]
class Services extends Component
{
    public function render()
    {
        return view('livewire.front.pages.services');
    }
}
