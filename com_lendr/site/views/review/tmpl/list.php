<div class="reviews" id="review-list">
	<?php for($i=0, $n = count($this->reviews);$i<$n;$i++) { 
	        $this->_reviewEntryView->review = $this->reviews[$i];
	        echo $this->_reviewEntryView->render();
	} ?>
</div>