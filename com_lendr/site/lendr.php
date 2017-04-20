<?php // No direct access

defined( '_JEXEC' ) or die( 'Restricted access' );

//sessions
jimport( 'joomla.session.session' );
 
//load tables
JTable::addIncludePath(JPATH_COMPONENT.'/tables');

//load classes
JLoader::registerPrefix('Lendr', JPATH_COMPONENT);

//Load plugins
JPluginHelper::importPlugin('lendr');
 
//Load styles and javascripts
LendrHelpersStyle::load();

//application
$app = JFactory::getApplication();
 

// It will look for controller.php file in component root directory
$controller = JControllerLegacy::getInstance('Cobalt');

// Now you can task like this task=controller.action
$controller->execute(JFactory::getApplication()->input->get('task'));
 
// Perform the Request task
$controller->execute();
