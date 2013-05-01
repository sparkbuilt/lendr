<div id="returnBookModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="returnBookModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><?php echo JText::_('COM_LENDR_RETURN'); ?></h3>
  </div>
  <div class="modal-body">
	<div class="row-fluid">
		<form id="returnForm">
			<div class="alert alert-info">
        <?php echo JText::_('COM_LENDR_RETURN_DESC'); ?>
      </div>
      <div id="book-modal-info" class="media"></div>
      <input type="hidden" name="book_id" id="book_id" value="" />
      <input type="hidden" name="user_id" value="<?php echo JFactory::getUser()->id; ?>" />
      <input type="hidden" name="table" value="Book" />
      <input type="hidden" name="lend" value="0" />
		</form>
	</div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true"><?php echo JText::_('COM_LENDR_CLOSE'); ?></button>
    <button class="btn btn-primary" onclick="returnBook();"><?php echo JText::_('COM_LENDR_RETURN'); ?></button>
  </div>
</div>