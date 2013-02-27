<div id="newBookModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="newBookModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><?php echo JText::_('COM_LENDR_ADD_BOOK'); ?></h3>
  </div>
  <div class="modal-body">
	<div class="row-fluid">
		<form>
			<input class="span6" type="text" name="title" placeholder="<?php echo JText::_('COM_LENDR_TITLE'); ?>" />
			<input type="text" class="span6" name="author" placeholder="<?php echo JText::_('COM_LENDR_AUTHOR'); ?>" />
		</form>
	</div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true"><?php echo JText::_('COM_LENDR_CLOSE'); ?></button>
    <button class="btn btn-primary"><?php echo JText::_('COM_LENDR_ADD'); ?></button>
  </div>
</div>