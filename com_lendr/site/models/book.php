<?php // no direct access

defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class LendrModelsBook extends LendrModelsDefault
{

  /**
  * Protected fields
  **/
  var $_book_id     = null;
  
  var $_user_id     = null;
  
  var $_library_id  = null;

  var $_pagination  = null;

  var $_total       = null;

  var $_published   = 1;

  var $_waitlist    = FALSE;


  function __construct()
  {

    parent::__construct();       
  }
 
  /**
  * Builds the query to be used by the book model
  * @return   object  Query object
  *
  *
  */
  protected function _buildQuery()
  {
    $db = JFactory::getDBO();
    $query = $db->getQuery(TRUE);

    $query->select('b.book_id, b.user_id, b.isbn, b.title, b.author, b.summary, b.pages, 
                    b.publish_date, b.lent, b.lent_date, b.due_date');
    $query->from('#__lendr_books as b');

    $query->select('w.waitlist_id');
    $query->leftjoin('#__lendr_waitlists as w on w.book_id = b.book_id');


    return $query;
  }

  /**
  * Builds the filter for the query
  * @param    object  Query object
  * @return   object  Query object
  *
  */
  protected function _buildWhere(&$query)
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

    if($this->_waitlist)
    {
      $query->where('w.waitlist_id > 0');
    }

    $query->where('b.published = ' . (int) $this->_published);

    return $query;
  }

}