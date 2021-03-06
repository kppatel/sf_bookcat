<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Book', 'doctrine');

/**
 * BaseBook
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $title
 * @property integer $author_id
 * @property integer $category_id
 * @property boolean $is_read
 * @property integer $rating
 * @property string $description
 * @property Author $Author
 * @property Category $Category
 * 
 * @method integer  getId()          Returns the current record's "id" value
 * @method string   getTitle()       Returns the current record's "title" value
 * @method integer  getAuthorId()    Returns the current record's "author_id" value
 * @method integer  getCategoryId()  Returns the current record's "category_id" value
 * @method boolean  getIsRead()      Returns the current record's "is_read" value
 * @method integer  getRating()      Returns the current record's "rating" value
 * @method string   getDescription() Returns the current record's "description" value
 * @method Author   getAuthor()      Returns the current record's "Author" value
 * @method Category getCategory()    Returns the current record's "Category" value
 * @method Book     setId()          Sets the current record's "id" value
 * @method Book     setTitle()       Sets the current record's "title" value
 * @method Book     setAuthorId()    Sets the current record's "author_id" value
 * @method Book     setCategoryId()  Sets the current record's "category_id" value
 * @method Book     setIsRead()      Sets the current record's "is_read" value
 * @method Book     setRating()      Sets the current record's "rating" value
 * @method Book     setDescription() Sets the current record's "description" value
 * @method Book     setAuthor()      Sets the current record's "Author" value
 * @method Book     setCategory()    Sets the current record's "Category" value
 * 
 * @package    Book Catelog
 * @subpackage model
 * @author     Congenial
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBook extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('books');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('title', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 50,
             ));
        $this->hasColumn('author_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('category_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('is_read', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => false,
             ));
        $this->hasColumn('rating', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 1,
             'length' => 4,
             ));
        $this->hasColumn('description', 'string', null, array(
             'type' => 'string',
             'notnull' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Author', array(
             'local' => 'author_id',
             'foreign' => 'id'));

        $this->hasOne('Category', array(
             'local' => 'category_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}