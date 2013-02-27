<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); 

//Display partial views
class LendrViewsLibraryPhtml extends JViewHTML
{

    function render()
    {
    	$this->_bookListView = LendrHelpersView::load('Book','_entry','phtml');
    	$this->_borrowBookView = LendrHelpersView::load('Book','_borrow','phtml');
    	return parent::render();
 	}
}