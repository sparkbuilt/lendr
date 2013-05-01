<div id="newBookModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="newBookModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><?php echo JText::_('COM_LENDR_ADD_BOOK'); ?></h3>
  </div>
  <div class="modal-body">
	<div class="row-fluid">
		<form id="bookForm">
			<input class="span12" type="text" name="title" placeholder="<?php echo JText::_('COM_LENDR_TITLE'); ?>" />
      <input type="text" class="span6" name="author" placeholder="<?php echo JText::_('COM_LENDR_AUTHOR'); ?>" />
      <input type="text" class="span6" name="isbn" placeholder="<?php echo JText::_('COM_LENDR_ISBN'); ?>" />
      <input type="text" class="span6" name="pages" placeholder="<?php echo JText::_('COM_LENDR_PAGES'); ?>" />
      <input type="text" class="span6" name="publish_date" placeholder="<?php echo JText::_('COM_LENDR_PUBLISH_DATE'); ?>" />
      <input type="hidden" name="user_id" value="<?php echo JFactory::getUser()->id; ?>" />
      <input type="hidden" name="table" value="book" />
      <input type="hidden" name="published" value="1" />
      <textarea class="span12" placeholder="<?php echo JText::_('COM_LENDR_SUMMARY'); ?>" name="summary" rows="10"></textarea>
		</form>
	</div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true"><?php echo JText::_('COM_LENDR_CLOSE'); ?></button>
    <button class="btn btn-primary" onclick="addBook()"><?php echo JText::_('COM_LENDR_ADD'); ?></button>
  </div>
</div>