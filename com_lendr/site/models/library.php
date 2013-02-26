<?php // no direct access

defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class LendrModelsLibrary extends LendrModelsDefault
{

  //Define class level variables
  var $_library_id  = null;
  var $_user_id     = null;
  var $_published   = 1;

  function __construct()
  {
    $app = JFactory::getApplication();
    $this->_library_id = $app->input->get('library_id',null);
    $this->_user_id = $app->input->get('user_id',null);

    parent::__construct();       
  }

 function get() 
  {
    $library = parent::get(); 

    $bookModel = new LendrModelsBook();
    $library->books = $bookModel->listItems();

    return $library;
  }

  function listItems()
  {
    $bookModel = new LendrModelsBook();
    $libraries = parent::listItems();

    $n = count($libraries);

    for($i=0;$i<$n;$i++)
    {
      $library = $libraries[$i];
      
      $bookModel->_library_id = $library->id;
      $library->books = $bookModel->listItems();
    }

    return $libraries;
  }

  function buildQuery()
  {
    $db = JFactory::getDBO();
    $query = $db->getQuery(TRUE);

    $query->select("l.library_id, l.name, l.description");
    $query->from("#__lendr_libraries as l");

    $query->select("p.bio, p.avatar");
    $query->leftjoin("#__lendr_profiles as p ON p.user_id = l.user_id");

    $query->select("u.username, u.name");
    $query->leftjoin("#__users as u ON u.id = p.user_id");

    return $query;
  }


  function buildWhere(&$query)
  {

    if(is_numeric($this->_user_id)) 
    {
      $query->where('l.user_id = ' . (int) $this->_user_id);
    }

    if(is_numeric($this->_library_id)) 
    {
      $query->where('l.library_id = ' . (int) $this->_library_id);
    }

    $query->where('l.published = '. (int) $this->_published);

    return $query;
  }
   

  function populateState()
  {

  }
}