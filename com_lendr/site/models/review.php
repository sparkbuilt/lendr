<?php // no direct access

defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class LendrModelsReview extends LendrModelsDefault
{

  /**
  * Protected fields
  **/
  var $_book_id     = null;
  
  var $_user_id     = null;
  
  var $_library_id  = null;

  var $_published   = 1;



  function __construct()
  {

    parent::__construct();       
  }

  /**
  * Override the default store
  *
  */
  public function store()
  {
    $row = parent::store();
    $row->email = JUser::getInstance($row->user_id)->get('email');

    return $row;
  }

  /**
  * Builds the query to be used by the review model
  * @return   object  Query object
  *
  *
  */
  protected function _buildQuery()
  {
    $db = JFactory::getDBO();
    $query = $db->getQuery(TRUE);

    $query->select('r.review_id, r.title, r.review, r.book_id, r.user_id, r.rating');
    $query->from('#__lendr_reviews as r');

    $query->select('u.email');
    $query->leftjoin('#__users as u on u.id = r.user_id');

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
      $query->where('r.book_id = ' . (int) $this->_book_id);
    }

    if(is_numeric($this->_user_id)) 
    {
      $query->where('r.user_id = ' . (int) $this->_user_id);
    }

    if(is_numeric($this->_library_id)) 
    {
      $query->where('r.library_id = ' . (int) $this->_library_id);
    }

    $query->where('r.published = ' . (int) $this->_published);

    return $query;
  }
}