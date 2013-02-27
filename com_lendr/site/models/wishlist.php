<?php // no direct access

defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class LendrModelsWaitlist extends LendrModelsDefault
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

    return $query;
  }

}