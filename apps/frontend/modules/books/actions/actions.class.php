<?php

/**
 * books actions.
 *
 * @package    sf_bookcat
 * @subpackage books
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class booksActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->books = Doctrine_Core::getTable('Book')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->book = Doctrine_Core::getTable('Book')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->book);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new BookForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new BookForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($book = Doctrine_Core::getTable('Book')->find(array($request->getParameter('id'))), sprintf('Object book does not exist (%s).', $request->getParameter('id')));
    $this->form = new BookForm($book);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($book = Doctrine_Core::getTable('Book')->find(array($request->getParameter('id'))), sprintf('Object book does not exist (%s).', $request->getParameter('id')));
    $this->form = new BookForm($book);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($book = Doctrine_Core::getTable('Book')->find(array($request->getParameter('id'))), sprintf('Object book does not exist (%s).', $request->getParameter('id')));
    $book->delete();

    $this->redirect('books/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $book = $form->save();

      $this->redirect('books/edit?id='.$book->getId());
    }
  }
}
