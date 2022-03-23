<?php
   
namespace Uniform\Actions;

use Kirby\Cms\App as Kirby;

class FirstCustomAction extends Action {
    public function perform()
    {
        try {
            // get the name of the session variable
            $name = $this->option('name', 'session-store');

            // put form into session
            Kirby::instance()->session()->set($name, date('H:i:s'));
            return date('H:i:s');
        } catch (\Exception $e) {
            $this->fail($e->getMessage());
        }
    }
}
