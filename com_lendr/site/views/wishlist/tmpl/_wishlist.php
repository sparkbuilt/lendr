<table cellpadding="0" cellspacing="0" width="100%" class="table table-striped">
	<tbody id="book-list">
		<?php for($i=0, $n = count($this->wishlist);$i<$n;$i++) { 
		        $this->_bookListView->book = $this->wishlist[$i];
		        $this->_bookListView->type = 'wishlist';
		        echo $this->_bookListView->render();
		} ?>
	</tbody>
</table>