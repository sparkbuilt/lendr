<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class TableWaitlist extends JTable
{                      
  /**
  * Constructor
  *
  * @param object Database connector object
  */
  function __construct( &$db ) {
    parent::__construct('#__lendr_waitlists', 'waitlist_id', $db);
  }
}