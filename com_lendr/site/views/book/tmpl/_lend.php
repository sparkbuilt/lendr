<div id="lendBookModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="lendBookModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><?php echo JText::_('COM_LENDR_LEND_BOOK'); ?></h3>
  </div>
  <div class="modal-body">
	<div class="row-fluid">
		<form id="lendForm">
			<div class="alert alert-info">
        <?php echo JText::_('COM_LENDR_LEND_BOOK_TO'); ?> <span id="borrower_name"></span>
      </div>
      <div id="book-modal-info" class="media"></div>
      <input type="hidden" name="book_id" id="bookid" value="<?php echo $this->book->book_id; ?>" />
      <input type="hidden" name="user_id" value="<?php echo JFactory::getUser()->id; ?>" />
      <input type="hidden" name="table" value="Book" />
      <input type="hidden" name="waitlist_id" value="<?php echo $this->book->waitlist_id; ?>" />
      <input type="hidden" name="borrower_id" id="borrower_id" value="<?php echo $this->book->borrower_id; ?>" />
      <input type="hidden" name="lend" value="1" />
		</form>
	</div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true"><?php echo JText::_('COM_LENDR_CLOSE'); ?></button>
    <button class="btn btn-primary" onclick="lendBook();"><?php echo JText::_('COM_LENDR_LEND'); ?></button>
  </div>
</div>