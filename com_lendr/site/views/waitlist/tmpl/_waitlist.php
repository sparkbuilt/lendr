<table cellpadding="0" cellspacing="0" width="100%" class="table table-striped">
	<tbody id="book-list">
		<?php for($i=0, $n = count($this->waitlist);$i<$n;$i++) { 
		        $this->_bookListView->book = $this->waitlist[$i];
		        $this->_bookListView->type = 'waitlist';
		        echo $this->_bookListView->render();
		} ?>
	</tbody>
</table>