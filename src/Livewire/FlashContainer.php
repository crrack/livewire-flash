<?php

namespace Crrack\LivewireFlash\Livewire;

use Livewire\Component;

class FlashContainer extends Component
{
    public function render()
    {
        return view(config('livewire-flash.views.container'));
    }
}
