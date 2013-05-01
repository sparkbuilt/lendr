<?php // no direct access

defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class LendrModelsStatistics extends JModelBase
{
 
 public function getStats()
 {
    $db = JFactory::getDbo();

    $stats = array();

    //Retrieve Total Books
    $query = $db->getQuery(true);
    $query->select('COUNT(*)')
          ->from('#__lendr_books')
          ->where('published = 1');
    $db->setQuery($query);
    $stats['total_books'] = $db->loadResult();

    //Retrieve Total Reviews
    $query = $db->getQuery(true);
    $query->select('COUNT(*)')
          ->from('#__lendr_reviews')
          ->where('published = 1');
    $db->setQuery($query);
    $stats['total_reviews'] = $db->loadResult();

    //Retrieve Total Lent
    $query = $db->getQuery(true);
    $query->select('COUNT(*)')
          ->from('#__lendr_waitlists')
          ->where('fulfilled = 1');
    $db->setQuery($query);
    $stats['total_loaned'] = $db->loadResult();

    //Retrieve Average Wishlist
    $query = $db->getQuery(true);
    $query->select('COUNT(book_id)')
          ->from('#__lendr_wishlists')
          ->group('user_id');
    $db->setQuery($query);
    $userBooks = $db->loadColumn();

    $stats['avg_wishlist'] = count($userBooks) > 0 ? round(array_sum($userBooks) / count($userBooks),0) : 0;

    //Retrieve Average Library
    $query = $db->getQuery(true);
    $query->select('COUNT(book_id)')
          ->from('#__lendr_books')
          ->where('published = 1')
          ->group('user_id');
    $db->setQuery($query);
    $userLibrary = $db->loadColumn();

    $stats['avg_library'] = count($userLibrary) > 0 ? round(array_sum($userLibrary) / count($userLibrary),0) : 0;

    //Retrieve Average Waitlist
    $query = $db->getQuery(true);
    $query->select('COUNT(book_id)')
          ->from('#__lendr_waitlists')
          ->group('user_id');
    $db->setQuery($query);
    $userWait = $db->loadColumn();
    $stats['avg_waitlist'] = count($userWait) > 0 ? round(array_sum($userWait) / count($userWait),0) : 0;

    return $stats;
 }

}