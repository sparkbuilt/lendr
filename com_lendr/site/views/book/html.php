<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class LendrViewsBookHtml extends JViewHtml
{
  function render()
  {
    $app = JFactory::getApplication();
   
    //retrieve task list from model
    $model = new LendrModelsBook();
    $this->book = $model->getItem($id,$view,FALSE);
        
    }

    //display
    return parent::render();
  } 
}