<h2 class="page-header"><?php echo JText::_('COM_LENDR_PROFILES'); ?></h2>
<div class="row-fluid">
	<?php for($i=0, $n = count($this->profiles);$i<$n;$i++) { 
	        $this->_profileListView->profile = $this->profiles[$i];
	        echo $this->_profileListView->render();
	} ?>
</div>