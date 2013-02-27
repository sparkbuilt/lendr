<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class LendrControllersAdd extends JControllerBase
{
  public function execute()
  {

  	$return = array("success"=>false);

  	$model = new LendrModelsBook();
  	if ( $row = $model->store() )
  	{
  		$return['success'] = true;
  		$return['msg'] = JText::_('COM_LENDR_BOOK_SAVE_SUCCESS');

  		$bookView = LendrHelpersView::load('Book','_entry','phtml');
  		$bookView->book = $row;

  		ob_start();
  		echo $bookView->render();
  		$html = ob_get_contents();
  		ob_clean();

  		$return['html'] = $html;

  	}else{
  		$return['msg'] = JText::_('COM_LENDR_BOOK_SAVE_FAILURE');
  	}

  	echo json_encode($return);

  }

}