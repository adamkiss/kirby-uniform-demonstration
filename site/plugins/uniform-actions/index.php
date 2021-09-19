<?php

namespace Uniform\Actions;

class FirstCustomAction extends Action {
  public function perform()
  {
      try {
          return strftime('%H:%M:%S');
      } catch (\Exception $e) {
          $this->fail($e->getMessage());
      }
  }
}

class SecondCustomAction extends Action {
    /* You can add more actions into this file */
  }