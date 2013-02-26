<?php // no direct access

defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class LendrModelsProfile extends LendrModelsDefault
{

  //Define class level variables
  var $_profile_id  = null;
  var $_user_id     = null;

  function __construct()
  {

    //If no User ID is set to current logged in user
    if(is_null($this->_user_id)) {
      $user = JFactory::getUser();
      $this->_user_id = $user->get('id');
    }

    parent::__construct();       
  }
 
  function buildQuery()
  {
    $db = JFactory::getDBO();
    $query = $db->getQuery(TRUE);

    $query->select("p.bio, p.avatar");
    $query->from("#__lendr_profiles as p");

    $query->select("u.username, u.name, u.email");
    $query->leftjoin("#__users as u ON u.id = p.user_id");

    return $query;
  }

  function buildWhere($query)
  {
    if(is_numeric($this->_user_id)) 
    {
      $query->where('p.user_id = ' . (int) $this->_user_id);
    }

    if(is_numeric($this->_profile_id)) 
    {
      $query->where('p.profile_id = ' . (int) $this->_profile_id);
    }

    return $query;
  }

  function get()
  {
    $profile = parent::get();

    $libraryModel = new LendrModelsLibrary()
    $libraryModel->set('_user_id',$this->_user_id);
    $profile->library = $libraryModel->get();

    return $profile;
  }
 
  function populateState()
  {

  }
}