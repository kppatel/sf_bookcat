<?php

/**
 * Book form.
 *
 * @package    Book Catelog
 * @subpackage form
 * @author     Congenial
 */
class BookForm extends BaseBookForm {
  public function configure() {
  	unset($this['created_at'], $this['updated_at']);
  }
}
