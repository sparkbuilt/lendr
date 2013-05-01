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
    $this->_user_id = $app->input->get('user_id',JFactory::getUser()->id);
  }

 function getItem() 
  {
   
    $bookModel = new LendrModelsBook();
    $bookModel->set('_waitlist', TRUE);
    $bookModel->set('_user_id', $this->_user_id);
    $waitlist = $bookModel->listItems();

    return $waitlist;
  }

  /**
  * Delete a book from a waitlist
  * @param int      ID of the book to delete
  * @return boolean True if successfully deleted
  */
  public function delete($id = null)
  {
    $app  = JFactory::getApplication();
    $id   = $id ? $id : $app->input->get('waitlist_id');

    if (!$id)
    {
      if ($book_id = $app->input->get('book_id')) 
      {
        $db = JFactory::getDbo();
        $user = JFactory::getUser();
        $query = $db->getQuery(true);
        $query->delete()
            ->from('#__lendr_waitlists')
            ->where('user_id = ' . $user->id)
            ->where('book_id = ' . $book_id);
        $db->setQuery($query);
        if($db->query()) {
          return true;
        }
      } 

    } else {
      $waitlist = JTable::getInstance('Waitlist','Table');
      $waitlist->load($id);

      if ($waitlist->delete()) 
      {
        return true;
      }      
    }

    return false;
  }

}
