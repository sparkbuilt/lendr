<div class="media well well-small span6">
  <a class="pull-left" href="<?php echo JRoute::_('index.php?option=com_lendr&view=profile&layout=profile&id='.$this->profile->id); ?>">
     <img src="http://www.gravatar.com/avatar/<?php echo md5(strtolower(trim($this->profile->email))); ?>?s=60" />
  </a>
  <div class="media-body">
    <h4 class="media-heading"><a href="<?php echo JRoute::_('index.php?option=com_lendr&view=profile&layout=profile&profile_id='.$this->profile->id); ?>"><?php echo $this->profile->name; ?></a></h4>
    <p><strong><?php echo JText::_('COM_LENDR_TOTAL_BOOKS'); ?></strong>: <?php echo $this->profile->totalBooks; ?><br />
       <strong><?php echo JText::_('COM_LENDR_TOTAL_REVIEWS'); ?></strong>: <?php echo $this->profile->totalReviews; ?>
   	</p>
  </div>
</div>