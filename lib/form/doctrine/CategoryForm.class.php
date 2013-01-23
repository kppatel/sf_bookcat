<?php

/**
 * Category form.
 *
 * @package    Book Catelog
 * @subpackage form
 * @author     Congenial
 */
class CategoryForm extends BaseCategoryForm {
  public function configure() {
  	unset($this['created_at'], $this['updated_at']);
  }
}
