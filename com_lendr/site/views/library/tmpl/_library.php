<table cellpadding="0" cellspacing="0" width="100%" class="table table-striped table-bordered">
	<tbody id="book-list">
		<?php for($i=0, $n = count($this->library->books);$i<$n;$i++) { 
		        $this->_bookListView->book = $this->library->books[$i];
		        echo $this->_bookListView->render();
		} ?>
	</tbody>
</table>
<?php echo $this->_borrowBookView->render(); ?>