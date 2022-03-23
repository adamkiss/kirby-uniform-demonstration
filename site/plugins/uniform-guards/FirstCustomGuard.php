<?php

namespace Uniform\Guards;

class FirstCustomGuard extends Guard {
    public function perform()
    {
        $accepted = $this->form->data('input') === 'test';
        if (!$accepted) {
            $this->reject();
        }
    }
}