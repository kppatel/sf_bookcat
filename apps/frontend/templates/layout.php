<!DOCTYPE html >
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
    <h1>Book Catelog</h1>
    <ul id="menu">
      <li><?php echo link_to('Home', '@homepage') ?></li>
      <li><?php echo link_to('Books', 'books/index') ?></li>
      <li><?php echo link_to('Authors', 'authors/index') ?></li>
      <li><?php echo link_to('Categories', 'categories/index') ?></li>
    </ul>
    <?php echo $sf_content ?>
  </body>
</html>
