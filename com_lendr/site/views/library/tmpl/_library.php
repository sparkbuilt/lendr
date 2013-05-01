<table cellpadding="0" cellspacing="0" width="100%" class="table table-striped">
	<thead>
		<tr>
			<th><?php echo JText::_('COM_LENDR_DETAILS'); ?></th>
			<th><?php echo JText::_('COM_LENDR_STATUS'); ?></th>
			<th><?php echo JText::_('COM_LENDR_ACTIONS'); ?></th>
		</tr>
	</thead>
	<tbody id="book-list">
		<?php for($i=0, $n = count($this->library->books);$i<$n;$i++) { 
		        $this->_bookListView->book = $this->library->books[$i];
		        $this->_bookListView->type = 'library';
		        echo $this->_bookListView->render();
		} ?>
	</tbody>
</table>
<?php echo $this->_borrowBookView->render(); ?>
<?php echo $this->_lendBookView->render(); ?>
<?php echo $this->_returnBookView->render(); ?>