<?php

/**
 * Author form.
 *
 * @package    Book Catelog
 * @subpackage form
 * @author     Congenial
 */
class AuthorForm extends BaseAuthorForm {
  public function configure() {
  	unset($this['created_at'], $this['updated_at']);
  }
}