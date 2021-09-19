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

class SecondCustomGuard extends Guard{
  /* You can add more guards into this file */
}