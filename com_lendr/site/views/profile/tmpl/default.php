<h2 class="page-header"><?php echo $this->profile->name; ?></h2>
<div class="row-fluid">
  <div class="span3">
    <img src="<?php echo $this->profile->avatar; ?>" />
  </div>
  <div class="span9">
    <dl class="dl-horizontal">
      <dt><?php echo JText::_('COM_LENDR_PROFILE_NAME'); ?></dt>
      <dd><?php echo $this->profile->name; ?></dd>
      <dt><?php echo JText::_('COM_LENDR_PROFILE_JOIN'); ?></dt>
      <dd><?php echo $this->profile->registerDate; ?></dd>
      <dt><?php echo JText::_('COM_LENDR_PROFILE_BIO'); ?></dt>
      <dd><?php echo $this->profile->bio; ?></dd>
    </dl>
  </div>
</div>
<div class="row-fluid">
  TABS for Library, Wait lists, Wish lists
</div>