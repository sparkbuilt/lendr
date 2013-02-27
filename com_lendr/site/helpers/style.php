<?php

class LendrHelpersStyle
{
	function load()
	{
		$document = JFactory::getDocument();
		$document->addStylesheet(JURI::base().'components/com_lendr/assets/css/style.css');

	}
}