<tr id="bookRow<?php echo $this->book->book_id; ?>">
  <td>
    <div class="media" id="book-row-<?php echo $this->book->book_id; ?>">
      <a class="pull-left" href="<?php echo JRoute::_('index.php?option=com_lendr&view=book&layout=book&id='.$this->book->book_id); ?>">
        <img class="media-object" src="http://covers.openlibrary.org/b/isbn/<?php echo $this->book->isbn; ?>-S.jpg">
      </a>
      <div class="media-body">
        <h4 class="media-heading"><a href="<?php echo JRoute::_('index.php?option=com_lendr&view=book&layout=book&id='.$this->book->book_id); ?>"><?php echo $this->book->title; ?></a></h4>
        <span class="muted"><?php echo $this->book->author; ?></span>
        <p><?php echo $this->book->summary; ?></p>
      </div>
    </div>
  </td>
  <td class="small">
    <?php if(isset($this->book->waitlist_id) && $this->book->waitlist_id > 0) { ?>
      <span class="label label-warning"><?php echo JText::_('COM_LENDR_REQUESTED'); ?></span>
    <?php } else { ?>
      <span class="label label-<?php echo $this->book->lent ? 'warning' : 'success'; ?>"><?php echo $this->book->lent ? JText::_('COM_LENDR_LENT') : JText::_('COM_LENDR_AVAILABLE'); ?></span>
    <?php } ?>
  </td>
  <td class="small">
    <?php if($this->book->user_id == JFactory::getUser()->id) { ?>
                <?php if ($this->book->lent) { ?>
                  <a href="javascript:void(0);" role="button" class="btn btn-info btn-large" onclick="returnBookModal('<?php echo $this->book->book_id; ?>');"><?php echo JText::_('COM_LENDR_RETURN'); ?></a>                   
                <?php } elseif($this->book->waitlist_id > 0) { ?>
                  <a href="javascript:void(0);" class="btn btn-large btn-success" role="button" onclick="lendBookModal('<?php echo $this->book->book_id; ?>','<?php echo $this->book->borrower; ?>');"><?php echo JText::_('COM_LENDR_LEND_BOOK'); ?></a>
                <?php } ?>
                <a href="javascript:void(0);" onclick="deleteBook('<?php echo $this->book->book_id; ?>','<?php echo $this->type; ?>');" class="btn"><i class="icon icon-trash"></i> <?php echo JText::_('COM_LENDR_DELETE'); ?></a>
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
  </td>
</tr>
