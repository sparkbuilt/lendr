<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class LendrViewsProfileHtml extends JViewHtml
{
  function render()
  {
    $app = JFactory::getApplication();
    $layout = $app->input->get('layout');

    //retrieve task list from model
    $profileModel = new LendrModelsProfile();

    $this->_modalMessage = LendrHelpersView::load('Profile','_message','phtml');

    switch($layout) {

      case "profile":
        $this->profile = $profileModel->getItem();
        
        $this->_addBookView = LendrHelpersView::load('Book','_add','phtml');

        $this->_libraryView = LendrHelpersView::load('Library','_library','phtml');
        $this->_libraryView->library = $this->profile->library;

        $this->_waitlistView = LendrHelpersView::load('Waitlist','_waitlist','phtml');
        $this->_waitlistView->waitlist = $this->profile->waitlist;

        $this->_wishlistView = LendrHelpersView::load('Wishlist','_wishlist','phtml');
        $this->_wishlistView->wishlist = $this->profile->wishlist;

      break;

      case "list":
      default:
        $this->profiles = $profileModel->listItems();
        $this->_profileListView = LendrHelpersView::load('Profile','_entry','phtml');
      break;

    }

    //display
    return parent::render();
  } 
}