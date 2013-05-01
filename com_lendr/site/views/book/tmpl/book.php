<h2 class="page-header"><?php echo $this->book->title; ?></h2>
<div class="row-fluid">
  <div class="span3">
    <img class="media-object" src="http://covers.openlibrary.org/b/isbn/<?php echo $this->book->isbn; ?>-L.jpg">
  </div>
  <div class="span9 well well-small">
      <h3><?php echo $this->book->title; ?></h3>
      <p class="lead"><?php echo $this->book->summary; ?></p>
      <p>
        <?php if($this->book->user_id == JFactory::getUser()->id) { ?>
                <?php if ($this->book->lent) { ?>
                    <a href="#returnBookModal" class="btn btn-info btn-large"><?php echo JText::_('COM_LENDR_RETURN'); ?></a>                   
                <?php } elseif($this->book->waitlist_id > 0) { ?>
                 <a href="#lendBookModal" class="btn btn-large btn-success" data-toggle="modal" role="button" id="lendButton"><?php echo JText::_('COM_LENDR_LEND_BOOK'); ?></a>
                <?php } ?>
          <?php } else {       
              if(($this->book->waitlist_id > 0) && $this->book->user_id == JFactory::getUser()->id) { ?>
              <a href="javascript:void(0);" onclick="cancelRequest(<?php echo $this->book->book_id; ?>);" class="btn btn-danger"><?php echo JText::_('COM_LENDR_CANCEL_REQUEST'); ?></a>
              <?php } else { ?>
              <div class="btn-group">
                <a href="javascript:void(0);" onclick="borrowBookModal(<?php echo $this->book->book_id; ?>);" class="btn"><?php echo JText::_('COM_LENDR_BORROW'); ?></a>
                <?php if($this->params->get('new_reviews') || $this->params->get('new_wishlists')): ?>
                  <button class="btn dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <?php if($this->params->get('new_wishlists') == 1 ): ?>
                      <li><a href="javascript:void(0);" onclick="addToWishlist('<?php echo $this->book->book_id; ?>');"><?php echo JText::_('COM_LENDR_ADD_WISHLIST'); ?></a></li>
                    <?php endif; ?>
                    <?php if($this->params->get('new_reviews') == 1 ): ?>
                      <li><a href="#newReviewModal" data-toggle="modal"><?php echo JText::_('COM_LENDR_WRITE_REVIEW'); ?></a></li>
                    <?php endif; ?>
                  </ul>
                <?php endif; ?>
              </div>
              
              <?php } 
          } ?>
        </p>
  </div>
</div>
<br />
<div class="row-fluid">
<div class="tabbable">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#detailsTab" data-toggle="tab"><?php echo JText::_('COM_LENDR_BOOK_DETAILS'); ?></a></li>
    <li><a href="#reviewsTab" data-toggle="tab"><?php echo JText::_('COM_LENDR_REVIEWS'); ?></a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="detailsTab">
      <h2><?php echo JText::_('COM_LENDR_BOOK_DETAILS'); ?></h2>
      <p>
        <strong><?php echo JText::_('COM_LENDR_AUTHOR'); ?></strong><br />
        <?php echo $this->book->author; ?>
      </p>
      <p>
        <strong><?php echo JText::_('COM_LENDR_PAGES'); ?></strong><br />
        <?php echo $this->book->pages; ?>
      </p>
      <p>
        <strong><?php echo JText::_('COM_LENDR_PUBLISH_DATE'); ?></strong><br />
        <?php echo $this->book->publish_date; ?>
      </p>
      <p>
        <strong><?php echo JText::_('COM_LENDR_ISBN'); ?></strong><br />
        <?php echo $this->book->isbn; ?>
      </p>
    </div>
    <div class="tab-pane" id="reviewsTab">
      <?php if($this->params->get('new_reviews') == 1 ): ?>
        <a href="#newReviewModal" role="button" data-toggle="modal" class="btn pull-right"><i class="icon icon-star"></i> <?php echo JText::_('COM_LENDR_ADD_REVIEW'); ?></a>
        <?php echo $this->_addReviewView->render(); ?>
      <?php endif; ?>
      <h2><?php echo JText::_('COM_LENDR_REVIEWS'); ?></h2>
      <?php echo $this->_reviewsView->render(); ?>
    </div>
  </div>
</div>
</div>

<?php echo $this->_lendBookView->render(); ?>
<?php echo $this->_returnBookView->render(); ?>
<?php echo $this->_modalMessage->render(); ?>