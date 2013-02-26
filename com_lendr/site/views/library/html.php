<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class LendrViewsLibraryHtml extends JViewHtml
{
  function render()
  {

    //retrieve task list from model
    $libraryModel = new LendrModelsLibrary();
    
    $this->libraries = $libraryModel->list();
    
    //display
    return parent::render();
  } 
}