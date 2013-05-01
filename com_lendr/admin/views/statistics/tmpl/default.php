<div class="row-fluid">
<div class="span4 thumbnail">
<h3>
	<span class="label label-info pull-right"><?php echo $this->stats['total_books']; ?></span>
	<?php echo JText::_('COM_LENDR_STATISTICS_TOTAL_BOOKS'); ?>
</h3>
<div class="progress progress-success">
  <div class="bar" style="width: <?php echo $this->stats['total_books'] > 100 ? $this->stats['total_books'] / 100 : $this->stats['total_books']; ?>%"></div>
</div>
<p><?php echo JText::_('COM_LENDR_STATISTICS_TOTAL_BOOKS_DESC'); ?></p>
</div>

<div class="span4 thumbnail">
<h3>
	<span class="label label-info pull-right"><?php echo $this->stats['total_reviews']; ?></span>
	<?php echo JText::_('COM_LENDR_STATISTICS_TOTAL_REVIEWS'); ?>
</h3>
<div class="progress progress-success">
  <div class="bar" style="width: <?php echo $this->stats['total_reviews'] > 100 ? $this->stats['total_reviews'] / 100 : $this->stats['total_reviews']; ?>%"></div>
</div>
<p><?php echo JText::_('COM_LENDR_STATISTICS_TOTAL_REVIEWS_DESC'); ?></p>
</div>

<div class="span4 thumbnail">
<h3>
	<span class="label label-info pull-right"><?php echo $this->stats['total_loaned']; ?></span>
	<?php echo JText::_('COM_LENDR_STATISTICS_TOTAL_LENT'); ?>
</h3>
<div class="progress progress-success">
  <div class="bar" style="width: <?php echo $this->stats['total_loaned'] > 100 ? $this->stats['total_loaned'] / 100 : $this->stats['total_loaned']; ?>%"></div>
</div>
<p><?php echo JText::_('COM_LENDR_STATISTICS_TOTAL_LENT_DESC'); ?></p>
</div>
</div>
<br />
<div class="row-fluid">
<div class="span4 thumbnail">
<h3>
	<span class="label label-info pull-right"><?php echo $this->stats['avg_wishlist']; ?></span>
	<?php echo JText::_('COM_LENDR_STATISTICS_AVG_WISHLIST'); ?>
</h3>
<div class="progress progress-info">
  <div class="bar" style="width: <?php echo $this->stats['avg_wishlist'] > 100 ? $this->stats['avg_wishlist'] / 100 : $this->stats['avg_wishlist']; ?>%"></div>
</div>
<p><?php echo JText::_('COM_LENDR_STATISTICS_AVG_WISHLIST_DESC'); ?></p>
</div>

<div class="span4 thumbnail">
<h3>
	<span class="label label-info pull-right"><?php echo $this->stats['avg_library']; ?></span>
	<?php echo JText::_('COM_LENDR_STATISTICS_AVG_LIBRARY'); ?>
</h3>
<div class="progress progress-info">
  <div class="bar" style="width: <?php echo $this->stats['avg_library'] > 100 ? $this->stats['avg_library'] / 100 : $this->stats['avg_library']; ?>%"></div>
</div>
<p><?php echo JText::_('COM_LENDR_STATISTICS_AVG_LIBRARY_DESC'); ?></p>
</div>

<div class="span4 thumbnail">
<h3>
	<span class="label label-info pull-right"><?php echo $this->stats['avg_waitlist']; ?></span>
	<?php echo JText::_('COM_LENDR_STATISTICS_AVG_WAITLIST'); ?>
</h3>
<div class="progress progress-info">
  <div class="bar" style="width: <?php echo $this->stats['avg_waitlist'] > 100 ? $this->stats['avg_waitlist'] / 100 : $this->stats['avg_waitlist']; ?>%"></div>
</div>
<p><?php echo JText::_('COM_LENDR_STATISTICS_AVG_WAITLIST_DESC'); ?></p>
</div>


</div>