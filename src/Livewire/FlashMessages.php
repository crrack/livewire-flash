<?php

namespace Crrack\LivewireFlash\Livewire;

use Livewire\Component;

class FlashMessages extends Component
{
    public function render()
    {
        $messages = session()->get('flashMessages');
        session()->forget('flashMessages');
        if(empty($messages)) {
            return <<<'blade'
            <div></div>
        blade;
        }else {
            return view(config('livewire-flash.views.messages'))->with('messages', $messages);
        }

    }
}
