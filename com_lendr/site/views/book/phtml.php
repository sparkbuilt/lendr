<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); 

//Display partial views
class LendrViewsBookPhtml extends JViewHTML
{

    function render()
    {
    	$this->params = JComponentHelper::getParams('com_lendr');
    	
    	return parent::render();
 	}
}