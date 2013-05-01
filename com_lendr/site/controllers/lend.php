<?php defined( '_JEXEC' ) or die( 'Restricted access' ); 
 
class LendrControllersLend extends JControllerBase
{
  public function execute()
  {

  	$return = array("success"=>false);

  	$model = new LendrModelsBook();
  	if ( $row = $model->lend() )
  	{
  		$return['success'] = true;
  		$return['msg'] = JText::_('COM_LENDR_BOOK_LEND_SUCCESS');

  	}else{
  		$return['msg'] = JText::_('COM_LENDR_BOOK_LEND_FAILURE');
  	}

  	echo json_encode($return);

  }

}