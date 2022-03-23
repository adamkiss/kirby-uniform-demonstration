<?php
/*
  Templates render the content of your pages.

  They contain the markup together with some control structures
  like loops or if-statements. The `$page` variable always
  refers to the currently active page.

  To fetch the content from each field we call the field name as a
  method on the `$page` object, e.g. `$page->title()`.

  This home template renders content from others pages, the children of
  the `photography` page to display a nice gallery grid.

  Snippets like the header and footer contain markup used in
  multiple templates. They also help to keep templates clean.

  More about templates: https://getkirby.com/docs/guide/templates/basics
*/
?>
<?php snippet('header') ?>
  <style>
    .form-test{
      margin: 60px 0;
      border: 1px solid lightgray;
      padding: 40px;
    }
    .form-test form {
      display: flex;
    }
    .form-test form > * {
      margin-right: 20px
    }
  </style>

  <div class="form-test">
    <header class="h1">
      <h1>
        Uniform test: 
        <span class="color-grey"><?= 
          $form->success() ? 'Success: '.kirby()->session()->get('session-store') :
            ($form->error() ? 'Error' : '---')
        ?></span>
      </h1>
    </header>
    <form action="/" method="POST" id="form-test">
      <?= csrf_field() ?>
      <label for="form-input">Input any text ("test" is the only that won't error)</label>
      <input type="text" name="input" id="form-input">
      <button type="submit">Submit</button>
    </form> 
  </div>


  <?php snippet('intro') ?>
  <?php
  /*
    We always use an if-statement to check if a page exists to
    prevent errors in case the page was deleted or renamed before
    we call a method like `children()` in this case
  */
  ?>
  <?php if ($photographyPage = page('photography')): ?>
  <ul class="home-grid">
    <?php foreach ($photographyPage->children()->listed() as $album): ?>
    <li>
      <a href="<?= $album->url() ?>">
        <figure>
          <?php
          /*
            The `cover()` method defined in the `album.php`
            page model can be used everywhere across the site
            for this type of page

            We can automatically resize images to a useful
            size with Kirby's built-in image manipulation API
          */
          ?>
          <?php if ($cover = $album->cover()): ?>
          <?= $cover->resize(1024, 1024) ?>
          <?php endif ?>
          <figcaption>
            <span>
              <span class="example-name"><?= $album->title()->html() ?></span>
            </span>
          </figcaption>
        </figure>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
  <?php endif ?>
<?php snippet('footer') ?>
