<?php // no direct access

defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class LendrModelsDefault extends JModelBase
{
  protected $__state_set  = null;
  protected $_total       = null;
  protected $_pagination  = null;
  protected $_db          = null;
  protected $id           = null;
  protected $limitstart   = 0;
  protected $limit        = 10;
 
  function __construct()
  {

    parent::__construct(); 
  }

  public function store($data=null)
  {    
    $data = $data ? $data : JRequest::get('post');
    $row = JTable::getInstance($data['table'],'Table');

    $date = date("Y-m-d H:i:s");

     // Bind the form fields to the table
    if (!$row->bind($data))
    {
        return false;
    }

    $row->modified = $date;
    if ( !$row->created )
    {
      $row->created = $date;
    }

    // Make sure the record is valid
    if (!$row->check())
    {
        return false;
    }
 
    if (!$row->store())
    {
        return false;
    }

    return $row;

  }
 
  /**
  * Modifies a property of the object, creating it if it does not already exist.
  *
  * @param   string  $property  The name of the property.
  * @param   mixed   $value     The value of the property to set.
  *
  * @return  mixed  Previous value of the property.
  *
  * @since   11.1
  */
  public function set($property, $value = null)
  {
    $previous = isset($this->$property) ? $this->$property : null;
    $this->$property = $value;
 
    return $previous;
  }

  public function get($property, $default = null) 
  {
    return isset($this->$property) ? $this->$property : $default;
  }

  /**
  * Build a query, where clause and return an object
  *
  */
  public function getItem()
  {
    $db = JFactory::getDBO();

    $query = $this->_buildQuery();
    $this->_buildWhere($query);
    $db->setQuery($query);

    $item = $db->loadObject();

    return $item;
  }

  /**
  * Build query and where for protected _getList function and return a list
  *
  * @return array An array of results.
  */
  public function listItems()
  {
    $query = $this->_buildQuery();    
    $query = $this->_buildWhere($query);
    
    $list = $this->_getList($query, $this->limitstart, $this->limit);

    return $list;
  }
 
  /**
  * Gets an array of objects from the results of database query.
  *
  * @param   string   $query       The query.
  * @param   integer  $limitstart  Offset.
  * @param   integer  $limit       The number of records.
  *
  * @return  array  An array of results.
  *
  * @since   11.1
  */
  protected function _getList($query, $limitstart = 0, $limit = 0)
  {
    $db = JFactory::getDBO();
    $db->setQuery($query, $limitstart, $limit);
    $result = $db->loadObjectList();
 
    return $result;
  }
 
  /**
  * Returns a record count for the query
  *
  * @param   string  $query  The query.
  *
  * @return  integer  Number of rows for query
  *
  * @since   11.1
  */
  protected function _getListCount($query)
  {
    $db = JFactory::getDBO();
    $db->setQuery($query);
    $db->query();
 
    return $db->getNumRows();
  }
 
  /* Method to get model state variables
  *
  * @param   string  $property  Optional parameter name
  * @param   mixed   $default   Optional default value
  *
  * @return  object  The property where specified, the state object where omitted
  *
  * @since   11.1
  */
  public function getState($property = null, $default = null)
  {
    if (!$this->__state_set)
    {   
      // Protected method to auto-populate the model state.
      $this->populateState();
 
      // Set the model state set flag to true.
      $this->__state_set = true;
    }
 
    return $property === null ? $this->state : $this->state->get($property, $default);
  }
  
  /**
  * Get total number of rows for pagination
  */
  function getTotal() 
  {
    if ( empty ( $this->_total ) )
    {
      $query = $this->_buildQuery();
      $this->_total = $this->_getListCount($query);
    }
    
    return $this->_total;
  }
 
  /**
  * Generate pagination
  */
  function getPagination() 
  {
    // Lets load the content if it doesn't already exist
    if (empty($this->_pagination)) 
    {
      $this->_pagination = new JPagination( $this->getTotal(), $this->getState($this->_view.'_limitstart'), $this->getState($this->_view.'_limit'),null,JRoute::_('index.php?view='.$this->_view.'&layout='.$this->_layout));
    }
    
    return $this->_pagination;
  }
}