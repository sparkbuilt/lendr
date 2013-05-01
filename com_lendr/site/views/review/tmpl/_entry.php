<div class="media">
  <a class="pull-left" href="<?php echo JRoute::_('index.php?option=com_lendr&view=profile&layout=profile&id='.$this->review->user_id); ?>">
    <img class="media-object" src="http://www.gravatar.com/avatar/<?php echo md5(strtolower(trim($this->review->email))); ?>?s=60" />
  </a>
  <div class="media-body">
    <h4 class="media-heading"><?php echo $this->review->title; ?></h4>
    <p><?php echo $this->review->review; ?></p>
  </div>
</div>
<div class="clearfix"></div>
<hr />