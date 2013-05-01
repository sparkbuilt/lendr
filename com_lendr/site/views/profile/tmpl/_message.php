<div id="messageModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><?php echo JText::_('COM_LENDR_MESSAGE'); ?></h3>
  </div>
  <div class="modal-body">
	<div class="row-fluid">
			<div class="alert alert-info" id="message">
        <?php echo JText::_('COM_LENDR_MESSAGE'); ?>
      </div>
	</div>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true"><?php echo JText::_('COM_LENDR_CLOSE'); ?></button>
  </div>
</div>