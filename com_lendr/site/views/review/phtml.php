<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); 

//Display partial views
class LendrViewsReviewPhtml extends JViewHTML
{

    function render()
    {
    	$this->_reviewEntryView = LendrHelpersView::load('Review','_entry','phtml');
    	return parent::render();
 	}
}