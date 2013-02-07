<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div class="sf_admin_form">
  <?php echo $form->renderGlobalErrors() ?>
  <form action="<?php echo url_for('books/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <fieldset>
    <legend></legend>
    <?php if (!$form->getObject()->isNew()): ?>
    <input type="hidden" name="sf_method" value="put" />
    <?php endif; ?>
      <div class="sf_admin_form_row sf_admin_text">
        <?php echo $form['title']->renderLabel() ?>
        <?php echo $form['title']->render() ?>
        <?php echo $form['title']->renderError() ?>
      </div>

      <div class="sf_admin_form_row sf_admin_text">
        <?php echo $form['author_id']->renderLabel() ?>
        <?php echo $form['author_id']->render() ?>
        <?php echo $form['author_id']->renderError() ?>
      </div>

      <div class="sf_admin_form_row sf_admin_text">
        <?php echo $form['category_id']->renderLabel() ?>
        <?php echo $form['category_id']->render() ?>
        <?php echo $form['category_id']->renderError() ?>
      </div>

      <div class="sf_admin_form_row sf_admin_text">
        <?php echo $form['is_read']->renderLabel('Reading Status') ?>
        <?php echo $form['is_read']->render() ?>
        <?php echo $form['is_read']->renderError() ?>
      </div>

      <div class="sf_admin_form_row sf_admin_text">
        <?php echo $form['rating']->renderLabel() ?>
        <?php echo $form['rating']->render() ?>
        <?php echo $form['rating']->renderError() ?>
      </div>

      <div class="sf_admin_form_row sf_admin_text">
        <?php echo $form['description']->renderLabel() ?>
        <?php echo $form['description']->render() ?>
        <?php echo $form['description']->renderError() ?>
      </div>
    </fieldset>

    <ul class="sf_admin_actions">
      <li class="sf_admin_action_save">
        <?php echo $form->renderHiddenFields() ?>
        <input type="submit" value="Save">
      </li>
      <li><input type="Reset"></li>
      <li class="sf_admin_action_list"><a href="<?php echo url_for('books/index') ?>">Cancel</a></li>
    </ul>
  </form>
</div>
