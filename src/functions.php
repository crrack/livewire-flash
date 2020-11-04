<?php

use Livewire\Component;

if (! function_exists('flash')) {

    /**
     * Arrange for a normal, session-based flash message.
     *
     */
    function flash($message, Component $livewire = null){
        $uid = 'flash' . time() . rand(1111,9999);
        $session = session()->get('flashMessages');
        $message['uid'] = $uid;

        if(!is_array($session)) $session = [];
        array_push($session, $message);

        session()->put('flashMessages', $session);
        if($livewire != null) {
            $livewire->emit('flashMessageAdded', ['uid' => $uid]);
        }
    }
}
