<?php

use Uniform\Form;
use Kirby\Cms\App;

return function (App $kirby) {
  $form = new Form([
    'input' => [
      'rules' => ['required'],
      'messages' => ['This is required'],
    ]
  ]);

  if ($kirby->request()->is('POST')) {
    $form
      ->firstCustomGuard();

    if ($form->success()) {
      $form->firstCustomAction();
    }
  }

  return ['form' => $form];
};