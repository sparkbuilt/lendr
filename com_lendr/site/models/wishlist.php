<?php // no direct access

defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class LendrModelsWishlist extends LendrModelsDefault
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


  function __construct()
  {
    $app = JFactory::getApplication();
    $this->_user_id = isset($this->_user_id) ? $this->_user_id : $app->input->get('profile_id');

    parent::__construct();       
  }
 
  /**
  * Builds the query to be used by the wishlist model
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

    $query->select('w.waitlist_id, w.user_id as borrower_id');
    $query->leftjoin('#__lendr_waitlists as w on w.book_id = b.book_id');

    $query->leftjoin("#__lendr_wishlists as wish on wish.book_id = b.book_id");

    return $query;
  }

  function store()
  {
    $db = JFactory::getDbo();
    $app = JFactory::getApplication();

    $data['table'] = 'wishlist';
    $data['user_id'] = JFactory::getUser()->id;
    $data['book_id'] = $app->input->get('book_id');

    $query = $db->getQuery(TRUE);
    $query->select('COUNT(*)');
    $query->from('#__lendr_wishlists');
    $query->where('user_id = ' . $db->q($data['user_id']));
    $query->where('book_id = ' . $db->q($data['book_id']));
    $db->setQuery($query);
    $existing = $db->loadResult();

    if($existing == 0) {
      parent::store($data);
    }

    return true;
  }

  /**
  * Builds the filter for the query
  * @param    object  Query object
  * @return   object  Query object
  *
  */
  protected function _buildWhere(&$query)
  {
    $this->_user_id = isset($this->_user_id) ? $this->_user_id : JFactory::getUser()->id;
    $query->where('wish.user_id = '. $this->_user_id);

    return $query;
  }

}