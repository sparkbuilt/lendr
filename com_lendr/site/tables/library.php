<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class TableLibrary extends JTable
{                      
  /**
  * Constructor
  *
  * @param object Database connector object
  */
  function __construct( &$db ) {
    parent::__construct('#__lendr_libraries', 'library_id', $db);
  }
}