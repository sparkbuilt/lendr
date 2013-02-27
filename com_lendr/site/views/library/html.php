<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class LendrViewsLibraryHtml extends JViewHtml
{
  function render()
  {

    //retrieve list of libraries	 from model
    $libraryModel = new LendrModelsLibrary();
    $this->libraries = $libraryModel->listItems();
    
    //display
    return parent::render();
  } 
}