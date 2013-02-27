<tr>
  <td>
    <div class="media">
      <a class="pull-left" href="#">
        <img class="media-object" src="http://covers.openlibrary.org/b/isbn/<?php echo $this->book->isbn; ?>-S.jpg">
      </a>
      <div id="book-row-<?php echo $this->book->book_id; ?>" class="media-body">
        <h4 class="media-heading"><?php echo $this->book->title; ?></h4>
        <span class="muted"><?php echo $this->book->author; ?></span>
        <p><?php echo $this->book->summary; ?></p>
      </div>
    </div>
  </td>
  <td class="small">
    <span class="label label-<?php echo $this->book->lent ? 'warning' : 'success'; ?>"><?php echo $this->book->lent ? JText::_('COM_LENDR_LENT') : JText::_('COM_LENDR_AVAILABLE'); ?></span>
  </td>
  <td class="small">
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
  </td>
</tr>
