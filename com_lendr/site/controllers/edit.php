<?php // no direct access

defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class LendrControllerEdit extends LendrControllerDefault
{
  function execute()
  {
    $app = JFactory::getApplication();
    $viewName = $app->input->get('view');
    $app->input->set('layout','edit');
    $app->input->set('view', $viewName);
     
    //display view
    return parent::execute();
  }
}