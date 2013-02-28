<?php // no direct access

defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class LendrModelsWaitlist extends LendrModelsDefault
{

  //Define class level variables
  var $_waitlist_id   = null;
  var $_user_id       = null;
  var $_published     = 1;

  function __construct()
  {
    parent::__construct();      

    $app = JFactory::getApplication();
    $this->_waitlist_id = $app->input->get('waitlist_id',null);
    $this->_user_id = $app->input->get('user_id',null);
  }

 function getItem() 
  {
   
    $bookModel = new LendrModelsBook();
    $bookModel->set('_waitlist', TRUE);
    $waitlist = $bookModel->listItems();

    return $waitlist;
  }
}