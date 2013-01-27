<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
  class TableWishlist extends JTable
  {                      
    /**
    * Constructor
    *
    * @param object Database connector object
    */
    function __construct( &$db ) {
      parent::__construct('#__lendr_wishlists', 'wishlist_id', $db);
    }
  }