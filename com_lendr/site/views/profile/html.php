<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class LendrViewsProfileHtml extends JViewHtml
{
  function render()
  {

    //retrieve task list from model
    $profileModel = new LendrModelsProfile();
    $this->profile = $profileModel->get();

    //display
    return parent::render();
  } 
}