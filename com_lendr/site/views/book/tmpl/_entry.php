<tr>
  <td>
    <div class="media" id="book-row-<?php echo $this->book->book_id; ?>">
      <a class="pull-left" href="#">
        <img class="media-object" src="http://covers.openlibrary.org/b/isbn/<?php echo $this->book->isbn; ?>-S.jpg">
      </a>
      <div class="media-body">
        <h4 class="media-heading"><?php echo $this->book->title; ?></h4>
        <span class="muted"><?php echo $this->book->author; ?></span>
        <p><?php echo $this->book->summary; ?></p>
      </div>
    </div>
  </td>
  <td class="small">
    <?php if($this->book->waitlist_id) { ?>
      <span class="label label-warning"><?php echo JText::_('COM_LENDR_REQUESTED'); ?></span>
    <?php } else { ?>
      <span class="label label-<?php echo $this->book->lent ? 'warning' : 'success'; ?>"><?php echo $this->book->lent ? JText::_('COM_LENDR_LENT') : JText::_('COM_LENDR_AVAILABLE'); ?></span>
    <?php } ?>
  </td>
  <td class="small">
    <?php if($this->book->user_id == JFactory::getUser()->id) { ?>
              <p class="pull-right">
                <?php if ($this->book->waitlist_id) { ?>
                    <a href="javascript:void(0);" class="btn btn-large btn-success"><?php echo JText::_('COM_LENDR_LEND_BOOK'); ?></a>
                <?php } elseif($this->book->lent) { ?>
                    <a href="javascript:void(0);" class="btn btn-info btn-success"><?php echo JText::_('COM_LENDR_RETURN'); ?></a>
                <?php } ?>
             </p>
            <div class="btn-group pull-right">
                <a href="javascript:void(0);" class="btn btn-small"><?php echo JText::_('COM_LENDR_VIEW_DETAILS'); ?></a>
                <a href="javascript:void(0);" class="btn btn-small"><?php echo JText::_('COM_LENDR_DELETE'); ?></a>
            </div>
          <?php } else { 
      
              if($this->book->waitlist_id && $this->book->user_id == JFactory::getUser()->id) { ?>
              
              <a href="javascript:void(0);" onclick="cancelRequest(<?php echo $this->book->book_id; ?>);" class="btn btn-danger"><?php echo JText::_('COM_LENDR_CANCEL_REQUEST'); ?></a>
              <?php } else { ?>
              <div class="btn-group">
                <a href="javascript:void(0);" onclick="borrowBookModal(<?php echo $this->book->book_id; ?>);" class="btn"><?php echo JText::_('COM_LENDR_BORROW'); ?></a>
                <button class="btn dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="#"><?php echo JText::_('COM_LENDR_ADD_WISHLIST'); ?></a></li>
                  <li><a href="#"><?php echo JText::_('COM_LENDR_WRITE_REVIEW'); ?></a></li>
                </ul>
              </div>
              
              <?php } 
          } ?>
  </td>
</tr>
