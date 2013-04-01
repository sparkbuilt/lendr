<a href="<?php echo JRoute::_('index.php?option=com_lendr&view=profile&layout=list'); ?>" class="btn pull-right"><i class="icon icon-chevron-left"></i> <?php echo JText::_('COM_LENDR_BACK'); ?></a>
<h2 class="page-header"><?php echo $this->profile->name; ?></h2>
<div class="row-fluid">
  <div class="span3">
    <img src="http://www.gravatar.com/avatar/<?php echo md5(strtolower(trim($this->profile->email))); ?>?s=180" />
  </div>
  <div class="span9 well well-small">
    <dl class="dl-horizontal">
      <dt><?php echo JText::_('COM_LENDR_PROFILE_NAME'); ?></dt>
      <dd><?php echo $this->profile->name; ?></dd>
      <dt><?php echo JText::_('COM_LENDR_PROFILE_JOIN'); ?></dt>
      <dd><?php echo JHtml::_('date', $this->profile->registerDate, JText::_('DATE_FORMAT_LC3')); ?></dd>
      <dt><?php echo JText::_('COM_LENDR_PROFILE_BIO'); ?></dt>
      <dd><?php if(isset($this->profile->details['aboutme'])) echo $this->profile->details['aboutme']; ?></dd>
    </dl>
  </div>
</div>
<br />
<div class="row-fluid">
<div class="tabbable">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#libraryTab" data-toggle="tab"><?php echo JText::_('COM_LENDR_LIBRARY'); ?></a></li>
    <li><a href="#wishlistTab" data-toggle="tab"><?php echo JText::_('COM_LENDR_WISHLIST'); ?></a></li>
    <li><a href="#waitlistTab" data-toggle="tab"><?php echo JText::_('COM_LENDR_WAITLIST'); ?></a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="libraryTab">
      <?php if($this->profile->isMine) { ?>
        <a href="#newBookModal" role="button" data-toggle="modal" class="btn pull-right"><i class="icon icon-pencil-2"></i> <?php echo JText::_('COM_LENDR_ADD_BOOK'); ?></a>
      <?php } ?>
      <h2><?php echo JText::_('COM_LENDR_LIBRARY'); ?></h2>
      <?php echo $this->_libraryView->render(); ?>
    </div>
    <div class="tab-pane" id="wishlistTab">
      <h2><?php echo JText::_('COM_LENDR_WISHLIST'); ?></h2>
      <?php echo $this->_wishlistView->render(); ?>
    </div>
    <div class="tab-pane" id="waitlistTab">
      <h2><?php echo JText::_('COM_LENDR_WAITLIST'); ?></h2>
      <?php echo $this->_waitlistView->render(); ?>
    </div>
  </div>
</div>
</div>

<?php echo $this->_addBookView->render(); ?>
<?php echo $this->_modalMessage->render(); ?>