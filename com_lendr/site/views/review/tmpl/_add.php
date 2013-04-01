<div id="newReviewModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="newReviewModal" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><?php echo JText::_('COM_LENDR_ADD_REVIEW'); ?></h3>
  </div>
  <div class="modal-body">
	<div class="row-fluid">
		<form id="reviewForm">
			<input class="span12" type="text" name="title" placeholder="<?php echo JText::_('COM_LENDR_TITLE'); ?>" />
      <textarea class="span12" placeholder="<?php echo JText::_('COM_LENDR_SUMMARY'); ?>" name="review" rows="10"></textarea>
      <input type="hidden" name="user_id" value="<?php echo $this->user->id; ?>" />
      <input type="hidden" name="view" value="review" />
      <input type="hidden" name="book_id" value="<?php echo $this->book->book_id; ?>" />
      <input type="hidden" name="model" value="review" />
      <input type="hidden" name="item" value="review" />
      <input type="hidden" name="table" value="review" />
		</form>
	</div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true"><?php echo JText::_('COM_LENDR_CLOSE'); ?></button>
    <button class="btn btn-primary" onclick="addReview()"><?php echo JText::_('COM_LENDR_ADD'); ?></button>
  </div>
</div>