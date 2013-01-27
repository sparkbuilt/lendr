<?php // No direct access

defined( '_JEXEC' ) or die( 'Restricted access' );
 
//sessions
jimport( 'joomla.session.session' );
 
//load tables
JTable::addIncludePath(JPATH_COMPONENT.'/tables');
 
//Load plugins
JPluginHelper::importPlugin('lendr');
 
//application
$app = JFactory::getApplication();
 
// Require specific controller if requested
if($controller = $app->input->get('controller','default')) {
  require_once (JPATH_COMPONENT.'/controllers/'.$controller.'.php');
}
 
// Create the controller
$classname  = 'LendrController'.$controller;
$controller = new $classname();
 
// Perform the Request task
$controller->execute();