<?php // no direct access

defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class LendrModelsBook extends LendrModelsDefault
{

  /**
  * Protected fields
  **/
  protected $_book_id     = null;
  
  protected $_user_id     = null;
  
  protected $_library_id  = null;

  protected $_pagination  = null;

  protected $_total       = null;

  protected $_published   = 1;


  function __construct()
  {
    $app = JFactory::getApplication();

    $this->_book_id = $app->input->get('book_id', null);
    $this->_user_id = $app->input->get('user_id', null);
    $this->_library_id = $app->input->('library_id', null);
    
    parent::__construct();       
  }
 
  /**
  * Builds the query to be used by the book model
  * @return   object  Query object
  *
  *
  */
  function buildQuery()
  {
    $db = JFactory::getDBO();
    $query = $db->getQuery(TRUE);

    $query->select('b.book_id, b.isbn, b.title, b.summary, b.pages, b.image, 
                    b.publish_date, b.lent, b.lent_date, b.due_date');
    $query->from('#__lendr_books as b');

    return $query;
  }

  /**
  * Builds the filter for the query
  * @param    object  Query object
  * @return   object  Query object
  *
  */
  function buildWhere(&$query)
  {

    if(is_numeric($this->_book_id)) 
    {
      $query->where('b.book_id = ' . (int) $this->_book_id);
    }

    if(is_numeric($this->_user_id)) 
    {
      $query->where('b.user_id = ' . (int) $this->_user_id);
    }

    if(is_numeric($this->_library_id)) 
    {
      $query->where('b.library_id = ' . (int) $this->_library_id);
    }

    $query->where('b.published = '. (int) $this->_published);

    return $query;
  }

}