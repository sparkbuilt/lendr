<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class TableProfile extends JTable
{                      
  /**
  * Constructor
  *
  * @param object Database connector object
  */
  function __construct( &$db ) {
    parent::__construct('#__lendr_profiles', 'profile_id', $db);
  }
}