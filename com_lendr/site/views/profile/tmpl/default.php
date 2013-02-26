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
<div class="tabbable"> <!-- Only required for left/right tabs -->
  <ul class="nav nav-tabs">
    <li class="active"><a href="#libraryTab" data-toggle="tab"><?php echo JText::_('COM_LENDR_LIBRARY'); ?></a></li>
    <li><a href="#wishlistTab" data-toggle="tab"><?php echo JText::_('COM_LENDR_WISHLIST'); ?></a></li>
    <li><a href="#waitlistTab" data-toggle="tab"><?php echo JText::_('COM_LENDR_WAITLIST'); ?></a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="libraryTab">
      <table class="table table-striped table-bordered">
        <?php for($i=0, $n = count($this->profile->library->books);$i<$n;$i++) { 
                $book = $this->profile->library->books[$i];
          ?>
          <tr>
            <td>
              <img src="<?php echo $book->image; ?>" class="media pull-left"><strong><?php echo $book->title; ?></strong><br /><?php echo $book->author; ?>
            </td>
            <td>
              <span class="label label-<?php echo $book->lent ? 'warning' : 'success'; ?>"><?php echo $book->lent ? JText::_('COM_LENDR_LENT') : JText::_('COM_LENDR_AVAILABLE'); ?></span>
            </td>
            <td>
              <a class="btn btn-group"></a>
            </td>
          </tr>
        <?php } ?>
      </table>
    </div>
    <div class="tab-pane" id="wishlistTab">
      <p>Howdy, I'm in Section 2.</p>
    </div>
    <div class="tab-pane" id="waitlistTab">
      <p>Howdy, I'm in Section 2.</p>
    </div>
  </div>
</div></div>