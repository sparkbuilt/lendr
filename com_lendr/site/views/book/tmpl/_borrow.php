<div id="borrowBookModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="newBookModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><?php echo JText::_('COM_LENDR_BORROW_BOOK'); ?></h3>
  </div>
  <div class="modal-body">
	<div class="row-fluid">
		<form id="borrowForm">
			<div class="alert alert-info">
        <?php echo JText::_('COM_LENDR_REQUEST_BOOK'); ?>
      </div>
      <div id="book-modal-info" class="media"></div>
      <input type="hidden" name="book_id" id="book-id" value="" />
      <input type="hidden" name="user_id" value="<?php echo JFactory::getUser()->id; ?>" />
      <input type="hidden" name="table" value="waitlist" />
		</form>
	</div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true"><?php echo JText::_('COM_LENDR_CLOSE'); ?></button>
    <button class="btn btn-primary" onclick="borrowBook();"><?php echo JText::_('COM_LENDR_BORROW'); ?></button>
  </div>
</div>