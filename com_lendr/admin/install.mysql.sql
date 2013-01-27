CREATE TABLE IF NOT EXISTS `#__lendr_books` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `isbn` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `summary` text DEFAULT NULL,
  `pages` varchar(55) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `publish_date` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `lent` tinyint(2) DEFAULT 0,
  `lent_date` datetime DEFAULT NULL,
  `due_date` datetime DEFAULT NULL,
  `lent_uid` varchar(255) DEFAULT NULL,
  `published` tinyint(2) DEFAULT 0,
  PRIMARY KEY (`book_id`)
);

CREATE TABLE IF NOT EXISTS `#__lendr_libraries` (
  `library_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `published` tinyint(2) DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`library_id`)

);

CREATE TABLE IF NOT EXISTS `#__lendr_waitlists` (
  `waitlist_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `fulfilled` tinyint(2) DEFAULT 0,
  `fulfilled_time` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`waitlist_id`)
);

CREATE TABLE IF NOT EXISTS `#__lendr_wishlists` (
  `wishlist_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`wishlist_id`)
);

CREATE TABLE IF NOT EXISTS `#__lendr_reviews` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `review` text DEFAULT NULL,
  `rating` varchar(55) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `published` tinyint(2) DEFAULT 1,
  PRIMARY KEY (`review_id`)
);